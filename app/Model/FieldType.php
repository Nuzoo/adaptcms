<?php
/**
 * Class FieldType
 *
 * @method findById(integer $id)
 */
class FieldType extends AppModel
{
    /**
    * Name of our Model, table will look like 'adaptcms_field_types'
    */
    public $name = "FieldType";

    /**
    * A field type can have many fields
    */
    public $hasMany = array(
        'Field' => array(
            'className' => 'Field',
            'foreignKey' => 'field_type_id',
            'dependent' => true
        )
    );

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

    /**
    * Validation Rules
    */
    public $validate = array(
        'title' => array(
            'rule' => array(
                'notEmpty'
            )
        ),
        'ord' => array(
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
    * Sets the slug
    *
    * @param array $options
    *
    * @return boolean
    */
    public function beforeSave($options = array())
    {
        parent::beforeSave();
        
        if (!empty($this->data['FieldType']['title']))
        {
            $path = VIEW_PATH . 'Elements' . DS . 'FieldTypes' . DS;
            $data_path = VIEW_PATH . 'Elements' . DS . 'FieldTypesData' . DS;

            if (!empty($this->data['FieldType']['template']))
            {
                if (!empty($this->data['FieldType']['id']) && !empty($this->data['FieldType']['old_title']) &&
                    $this->data['FieldType']['title'] != $this->data['FieldType']['old_title'])
                {
                    rename(
                        $path . $this->slug($this->data['FieldType']['old_title']) . '.ctp',
                        $path . $this->data['FieldType']['slug'] . '.ctp'
                    );
                }
                else
                {
                    $fh = fopen($path . $this->data['FieldType']['slug'] . '.ctp', 'w') or die("can't open file");
                    fwrite($fh, $this->data['FieldType']['template']);
                    fclose($fh);
                }
            }
    
            if (!empty($this->data['FieldType']['data_template']))
            {
                if (!empty($this->data['FieldType']['id']) && !empty($this->data['FieldType']['old_title']) &&
                    $this->data['FieldType']['title'] != $this->data['FieldType']['old_title'])
                {
                    rename(
                        $data_path . $this->slug($this->data['FieldType']['old_title']) . '.ctp',
                        $data_path . $this->data['FieldType']['slug'] . '.ctp'
                    );
                }
                else
                {
                    $fh = fopen($data_path . $this->data['FieldType']['slug'] . '.ctp', 'w') or die("can't open file");
                    fwrite($fh, $this->data['FieldType']['data_template']);
                    fclose($fh);
                }
            } elseif (isset($this->data['FieldType']['data_template']) && !empty($this->data['FieldType']['title']) &&
                      file_exists($data_path . $this->data['FieldType']['slug'] . '.ctp'))
            {
                unlink(
                    $data_path . $this->data['FieldType']['slug'] . '.ctp'
                );
            }
        }

        return true;
    }

    /**
    * Before Delete
    *
    * @param boolean $cascade
    *
    * @return void
    */
    public function beforeDelete($cascade = true)
    {
        if (!empty($this->title))
        {
            $path = VIEW_PATH . 'Elements' . DS . 'FieldTypes' . DS;
            $data_path = VIEW_PATH . 'Elements' . DS . 'FieldTypesData' . DS;

            if (file_exists($path . $this->slug($this->title) . '.ctp'))
                unlink(
                    $path . $this->slug($this->title) . '.ctp'
                );

            if (file_exists($data_path . $this->slug($this->title) . '.ctp'))
                unlink(
                    $data_path . $this->slug($this->title) . '.ctp'
                );
        }
    }

    /**
     * After Find
     *
     * @param array $results
     * @param boolean $primary
     *
     * @return array
     */
    public function afterFind($results, $primary = false)
    {
        if (empty($results))
            return array();

        foreach($results as $key => $result)
        {
            if (empty($result['FieldType']['label']) && !empty($result['FieldType']['title']))
            {
                $results[$key]['FieldType']['label'] = $result['FieldType']['title'];
            }
        }

        return $results;
    }

    public function getList()
    {
        $list = array();
        $rules = array();

        $find = $this->find('all', array(
           'order' => 'FieldType.ord ASC,FieldType.title ASC'
        ));

        if (!empty($find))
        {
            foreach($find as $row)
            {
                $list[$row['FieldType']['id']] = $row['FieldType']['label'];

                $rules[$row['FieldType']['id']] = (!empty($row['FieldType']['limit']) ? 'show' : 'hide');
            }
        }

        return array(
            'list' => $list,
            'rules' => $rules
        );
    }
}