<?php
/**
 * Class Page
 */
class Page extends AppModel {
    /**
    * Name of our Model, table will look like 'adaptcms_pages'
    */
	public $name = "Page";

    /**
    * Our validate rules. The Page title must not be empty and must be unique.
    * Content must not be empty either.
    */
    public $validate = array(
    	'title' => array(
			array(
				'rule' => 'notEmpty',
				'message' => 'Page title cannot be empty'
			),
			array(
				'rule' => 'isUnique',
				'message' => 'Page title has already been used'
			)
        ),
    	'content' => array(
            'rule' => array(
            	'notEmpty'
            )
        )
    );

    /**
     * @var array
     */
    public $actsAs = array(
	    'Slug',
	    'Delete'
    );

    /**
    * And every page belongs to a user.
    */
    public $belongsTo = array(
    	'User' => array(
    		'className' => 'User',
    		'foreignKey' => 'user_id'
    	)
    );

    /**
    * After Save
    *
    * @param array $options
    *
    * @return boolean
    */
    public function beforeSave($options = array())
    {
        parent::beforeSave();

        if (!empty($this->data['Page']['title']) && !empty($this->data['Page']['slug']))
        {
            $this->data['Page']['title'] = strip_tags($this->data['Page']['title']);

            if (empty($this->data['Page']['id']))
            {
                $fh = fopen($this->_getPath($this->data['Page']['slug']), 'w') or die("can't open file");
                fwrite($fh, $this->data['Page']['content']);
                fclose($fh);
            } else {
                $fh = fopen($this->_getPath($this->data['Page']['slug']), 'w') or die("can't open file");
                fwrite($fh, $this->data['Page']['content']);
                fclose($fh);

                if ($this->data['Page']['title'] != $this->data['Page']['old_title'])
                    unlink(
                        $this->_getPath( $this->slug($this->data['Page']['old_title']) )
                    );
            }
        }

        return true;
    }

    public function _getPath($slug)
    {
        return FRONTEND_VIEW_PATH . 'Pages' . DS . $slug . '.ctp';
    }

    public function getContent($slug)
    {
        $path = $this->_getPath($slug);

        $handle = fopen($path, "r");
        return fread($handle, filesize($path));
    }

    /**
    * Before Delete
    *
    * @param boolean $cascade
    *
    * @return bool
    */
    public function beforeDelete($cascade = true)
    {
        $row = $this->findById($this->id);

        if (!empty($row['Page']['slug']))
        {
            $path = $this->_getPath($row['Page']['slug']);

            if (file_exists($path))
                unlink($path);
        }

        return true;
    }
}