<!--cachetime:1389829655--><?php
			App::uses('MediaController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjEwOntzOjY6InBhcmFtcyI7YTo4OntzOjY6InBsdWdpbiI7TjtzOjEwOiJjb250cm9sbGVyIjtzOjU6Im1lZGlhIjtzOjY6ImFjdGlvbiI7czo1OiJpbmRleCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjA6e31zOjY6Il9Ub2tlbiI7YToyOntzOjM6ImtleSI7czo0MDoiZGNlYWU2ZWViYzJiOWFlODEwNTYwOWRlYzVjYmUzNGJlM2FkNTAwNiI7czoxNDoidW5sb2NrZWRGaWVsZHMiO2E6MDp7fX1zOjY6InBhZ2luZyI7YToxOntzOjU6Ik1lZGlhIjthOjEwOntzOjQ6InBhZ2UiO2k6MTtzOjc6ImN1cnJlbnQiO2k6MDtzOjU6ImNvdW50IjtpOjA7czo4OiJwcmV2UGFnZSI7YjowO3M6ODoibmV4dFBhZ2UiO2I6MDtzOjk6InBhZ2VDb3VudCI7aTowO3M6NToib3JkZXIiO047czo1OiJsaW1pdCI7aTo5O3M6Nzoib3B0aW9ucyI7YTowOnt9czo5OiJwYXJhbVR5cGUiO3M6NToibmFtZWQiO319czo2OiJtb2RlbHMiO2E6Njp7czo1OiJNZWRpYSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo1OiJNZWRpYSI7fXM6MTA6IlBlcm1pc3Npb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTA6IlBlcm1pc3Npb24iO31zOjQ6IkNyb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiQ3JvbiI7fXM6MTI6IlNldHRpbmdWYWx1ZSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMjoiU2V0dGluZ1ZhbHVlIjt9czo0OiJGaWxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IkZpbGUiO31zOjU6IkJsb2NrIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjU6IkJsb2NrIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjU6Im1lZGlhIjtzOjQ6ImJhc2UiO3M6OToiL2FkYXB0Y21zIjtzOjc6IndlYnJvb3QiO3M6MTA6Ii9hZGFwdGNtcy8iO3M6NDoiaGVyZSI7czoxNToiL2FkYXB0Y21zL21lZGlhIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO3M6NjoicGx1Z2luIjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new MediaController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxMDp7aTowO3M6NDoiSHRtbCI7aToxO3M6NDoiRm9ybSI7aToyO3M6NDoiVGltZSI7czo1OiJDYWNoZSI7YToxOntzOjk6ImNsYXNzTmFtZSI7czoxMzoiQWRhcHRjbXNDYWNoZSI7fWk6MztzOjEwOiJBdXRvTG9hZEpTIjtpOjQ7czo1OiJBZG1pbiI7aTo1O3M6OToiQWRhcHRIdG1sIjtpOjY7czo0OiJWaWV3IjtpOjc7czo3OiJTZXNzaW9uIjtpOjg7czo5OiJQYWdpbmF0b3IiO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo4OntzOjU6Im1lZGlhIjthOjA6e31zOjEyOiJjdXJyZW50X3VzZXIiO2E6MTU6e3M6MjoiaWQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo1OiJlbWFpbCI7czoyMToiYi5kaWdpdGl6ZWRAZ21haWwuY29tIjtzOjc6InJvbGVfaWQiO3M6MToiMSI7czoxMDoibG9naW5fdGltZSI7czoxOToiMjAxNC0wMS0xNSAwMDoxMjoyMCI7czoxNjoic2VjdXJpdHlfYW5zd2VycyI7czoxMzY6InsiMSI6eyJxdWVzdGlvbiI6IldoYXQgd2FzIHlvdXIgbW90aGVycyBtYWlkZW4gbmFtZT8iLCJhbnN3ZXIiOiJtYXNjaGtlIn0sIjIiOnsicXVlc3Rpb24iOiJOYW1lIG9mIHlvdXIgZmlyc3QgcGV0PyIsImFuc3dlciI6ImtudWRkZWwifX0iO3M6ODoic2V0dGluZ3MiO3M6MTc6InsidGltZV96b25lIjoiMSJ9IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjg6InRoZW1lX2lkIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyNDowOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0xNSAwMDoxMjoyMCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjE1OiJsYXN0X3Jlc2V0X3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6NDoiUm9sZSI7YTo2OntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6NToiYWRtaW4iO3M6ODoiZGVmYXVsdHMiO3M6MTM6ImRlZmF1bHQtYWRtaW4iO3M6NzoiY3JlYXRlZCI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjt9czo0OiJkYXRhIjthOjE6e3M6OToidGltZV96b25lIjtzOjE6IjEiO319czoxMToicGVybWlzc2lvbnMiO2E6MTQ6e3M6MjoiaWQiO3M6MjoiNjAiO3M6NToibGFiZWwiO047czo5OiJtb2R1bGVfaWQiO3M6MjoiMTYiO3M6Nzoicm9sZV9pZCI7czoxOiIxIjtzOjk6ImFjdGlvbl9pZCI7czoxOiIwIjtzOjY6InBsdWdpbiI7czowOiIiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjc6InJlbGF0ZWQiO2E6MTp7czo1OiJtZWRpYSI7YToxOntzOjQ6InZpZXciO2E6MTQ6e3M6MjoiaWQiO3M6MjoiNjYiO3M6NToibGFiZWwiO047czo5OiJtb2R1bGVfaWQiO3M6MjoiMTYiO3M6Nzoicm9sZV9pZCI7czoxOiIxIjtzOjk6ImFjdGlvbl9pZCI7czoxOiIwIjtzOjY6InBsdWdpbiI7czowOiIiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToibWVkaWEiO3M6NjoiYWN0aW9uIjtzOjQ6InZpZXciO3M6Njoic3RhdHVzIjtzOjE6IjEiO3M6NzoicmVsYXRlZCI7czo0NDoiW3siYWN0aW9uIjpbInZpZXciXSwiY29udHJvbGxlciI6WyJmaWxlcyJdfV0iO3M6Mzoib3duIjtzOjE6IjIiO3M6MzoiYW55IjtzOjE6IjIiO3M6OToib3duX2xhYmVsIjtzOjM6Ik93biI7czo5OiJhbnlfbGFiZWwiO3M6MzoiQW55Ijt9fX1zOjM6Im93biI7czoxOiIyIjtzOjM6ImFueSI7czoxOiIyIjtzOjk6Im93bl9sYWJlbCI7czozOiJPd24iO3M6OToiYW55X2xhYmVsIjtzOjM6IkFueSI7fXM6ODoidXNlcm5hbWUiO3M6NToiYWRtaW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo5Mjoic3RlCgo8aDE+TWVkaWEgTGlicmFyaWVzPC9oMT4KCiAgICA8ZGl2IGNsYXNzPSJ3ZWxsIj4KICAgICAgICBObyBMaWJyYXJpZXMgZm91bmQKICAgIDwvZGl2PgoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NToiTWVkaWEiO3M6MTA6ImJsb2NrX2RhdGEiO2E6MTp7czo5OiJzaG93LXBvbGwiO2E6NDp7czo0OiJQb2xsIjthOjEyOntzOjI6ImlkIjtzOjE6IjEiO3M6MTA6ImFydGljbGVfaWQiO047czo1OiJ0aXRsZSI7czoyODoiV2hhdCBpcyB5b3VyIGZhdm9yaXRlIHNwb3J0PyI7czo5OiJwb2xsX3R5cGUiO047czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6MTA6InN0YXJ0X2RhdGUiO047czo4OiJlbmRfZGF0ZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7czoxMToidG90YWxfdm90ZXMiO2k6MTtzOjg6ImNhbl92b3RlIjtiOjA7fXM6OToiUG9sbFZhbHVlIjthOjU6e2k6MDthOjU6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJ0aXRsZSI7czozOiJOQkEiO3M6NzoicG9sbF9pZCI7czoxOiIxIjtzOjU6InZvdGVzIjtzOjE6IjAiO3M6NzoicGVyY2VudCI7ZDowO31pOjE7YTo1OntzOjI6ImlkIjtzOjE6IjIiO3M6NToidGl0bGUiO3M6MzoiTkhMIjtzOjc6InBvbGxfaWQiO3M6MToiMSI7czo1OiJ2b3RlcyI7czoxOiIwIjtzOjc6InBlcmNlbnQiO2Q6MDt9aToyO2E6NTp7czoyOiJpZCI7czoxOiIzIjtzOjU6InRpdGxlIjtzOjY6IlNvY2NlciI7czo3OiJwb2xsX2lkIjtzOjE6IjEiO3M6NToidm90ZXMiO3M6MToiMSI7czo3OiJwZXJjZW50IjtkOjEwMDt9aTozO2E6NTp7czoyOiJpZCI7czoxOiI0IjtzOjU6InRpdGxlIjtzOjM6Ik5GTCI7czo3OiJwb2xsX2lkIjtzOjE6IjEiO3M6NToidm90ZXMiO3M6MToiMCI7czo3OiJwZXJjZW50IjtkOjA7fWk6NDthOjU6e3M6MjoiaWQiO3M6MToiNSI7czo1OiJ0aXRsZSI7czozOiJNTEIiO3M6NzoicG9sbF9pZCI7czoxOiIxIjtzOjU6InZvdGVzIjtzOjE6IjAiO3M6NzoicGVyY2VudCI7ZDowO319czo3OiJvcHRpb25zIjthOjU6e2k6MTtzOjM6Ik5CQSI7aToyO3M6MzoiTkhMIjtpOjM7czo2OiJTb2NjZXIiO2k6NDtzOjM6Ik5GTCI7aTo1O3M6MzoiTUxCIjt9czo1OiJCbG9jayI7YToxMTp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjk6InNob3ctcG9sbCI7czo0OiJ0eXBlIjtzOjc6ImR5bmFtaWMiO3M6OToibW9kdWxlX2lkIjtzOjE6IjgiO3M6NzoidXNlcl9pZCI7czoxOiIxIjtzOjU6ImxpbWl0IjtzOjE6IjEiO3M6NDoiZGF0YSI7czowOiIiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjY6Ik1vZHVsZSI7YTo3OntzOjI6ImlkIjtzOjE6IjgiO3M6NToidGl0bGUiO3M6NToiUG9sbHMiO3M6MTE6Im1vZGVsX3RpdGxlIjtzOjQ6IlBvbGwiO3M6MTI6ImJsb2NrX2FjdGl2ZSI7czoxOiIxIjtzOjk6ImlzX3BsdWdpbiI7czoxOiIxIjtzOjEzOiJpc19zZWFyY2hhYmxlIjtzOjE6IjAiO3M6OToiaXNfZmllbGRzIjtzOjE6IjAiO319fX19'));
				$this->View->setRoutes('{"category_view":{"route":{"plugin":null,"controller":"categories","action":"view"},"params":[0]},"page_view":{"route":{"plugin":null,"controller":"pages","action":"display"},"params":[0]},"media_index":{"route":{"admin":null,"plugin":null,"controller":"media","action":"index"}},"media_view":{"route":{"admin":null,"plugin":null,"controller":"media","action":"view"},"params":["slug"],"key":"Media"},"login":{"route":{"admin":null,"plugin":null,"controller":"users","action":"login"}},"logout":{"route":{"admin":null,"plugin":null,"controller":"users","action":"logout"}},"register":{"route":{"admin":null,"plugin":null,"controller":"users","action":"register"}},"user_profile":{"route":{"admin":null,"plugin":null,"controller":"users","action":"profile"},"params":["username"],"key":"User"},"user_forgot_password":{"route":{"admin":null,"plugin":null,"controller":"users","action":"forgot_password"}},"user_edit":{"route":{"admin":null,"plugin":null,"controller":"users","action":"edit"}},"article_view":{"route":{"plugin":null,"controller":"articles","action":"view"},"params":{"id":"id","slug":"slug"},"key":"Article"},"article_slug_view":{"route":{"plugin":null,"controller":"articles","action":"view"},"params":[0]},"article_tag":{"route":{"plugin":null,"controller":"articles","action":"tag"},"params":["tag"]},"article_rss":{"route":{"plugin":null,"rss":true,"controller":"articles","action":"index"}},"messages_index":{"route":{"admin":null,"plugin":null,"controller":"messages","action":"index"}},"messages_index_box":{"route":{"admin":null,"plugin":null,"controller":"messages","action":"index"},"params":[0]},"messages_move":{"route":{"admin":null,"plugin":null,"controller":"messages","action":"move"},"params":[0,"id"]},"messages_send":{"route":{"admin":null,"plugin":null,"controller":"messages","action":"send"}},"messages_view":{"route":{"plugin":null,"controller":"messages","action":"view"},"params":["id","slug"],"key":"Message"},"search":{"route":{"admin":null,"plugin":null,"controller":"search","action":"index"}},"comment_edit":{"route":{"admin":true,"plugin":null,"controller":"comments","action":"edit"},"params":["id"],"key":"Comment"},"comment_delete":{"route":{"admin":true,"plugin":null,"controller":"comments","action":"delete"},"params":["id"],"key":"Comment"},"adaptbb_forums":{"route":{"plugin":"adaptbb","controller":"forums","action":"index"}},"adaptbb_view_topic":{"route":{"plugin":"adaptbb","controller":"forum_topics","action":"view"},"params":["slug","forum_slug"],"key":"ForumTopic"},"adaptbb_view_forum":{"route":{"plugin":"adaptbb","controller":"forums","action":"view"},"params":["slug"],"key":"Forum"},"adaptbb_add_topic":{"route":{"plugin":"adaptbb","controller":"forum_topics","action":"add"},"params":["slug"],"key":"Forum"},"adaptbb_topic_change_status":{"route":{"plugin":"adaptbb","controller":"forum_topics","action":"change_status"},"params":["id"],"key":"ForumTopic"},"adaptbb_topic_edit":{"route":{"plugin":"adaptbb","controller":"forum_topics","action":"edit"},"params":["id"],"key":"ForumTopic"},"adaptbb_post_edit":{"route":{"plugin":"adaptbb","controller":"forum_posts","action":"ajax_edit"},"params":["id"],"key":"ForumPost"},"adaptbb_post_delete":{"route":{"plugin":"adaptbb","controller":"forum_posts","action":"delete"},"params":["id"],"key":"ForumPost"},"adaptbb_topic_delete":{"route":{"plugin":"adaptbb","controller":"forum_topics","action":"delete"},"params":["id"],"key":"ForumPost"},"links_apply":{"route":{"plugin":"links","controller":"links","action":"apply"}},"polls_list":{"route":{"plugin":"polls","controller":"polls","action":"all"}}}');
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				if (!empty($this->viewVars)) {
					$this->viewVars = array_merge($this->viewVars, $controller->viewVars);
				} else {
					$this->viewVars = $controller->viewVars;
				}

				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>
		Nuzoo's schräge Schichten | Media	</title>

	<link href="/adaptcms/adaptcms/img/favicon.ico" type="image/x-icon" rel="icon" /><link href="/adaptcms/adaptcms/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	
<script type="text/javascript" src="/adaptcms/js/jquery.min.js"></script><script type="text/javascript" src="/adaptcms/js/jquery.validate.min.js"></script><script type="text/javascript" src="/adaptcms/js/bootstrap.min.js"></script><script type="text/javascript" src="/adaptcms/js/vendor/noty/jquery.noty.js"></script><script type="text/javascript" src="/adaptcms/js/vendor/noty/layouts/bottomRight.js"></script><script type="text/javascript" src="/adaptcms/js/vendor/noty/themes/default.js"></script><script type="text/javascript" src="/adaptcms/js/global.js"></script>

<script type="text/javascript" src="/adaptcms/js/media.js"></script><script type="text/javascript" src="/adaptcms/links/js/global.js"></script><script type="text/javascript" src="/adaptcms/polls/js/global.js"></script>			

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="apple-touch-icon" href="/adaptcms/img/apple-touch-icon.png" />

	<!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="/adaptcms/css/bootstrap-default.min.css" />	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}

		.sidebar-nav {
			padding: 9px 0;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="/adaptcms/css/font-awesome.min.css" />
	<!--[if lt IE 9]>
		<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="/adaptcms/css/font-awesome-ie7.min.css" />	<![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<button class="navbar-toggle collapsed" data-toggle="collapse" type="button" data-target=".navbar-responsive-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="/adaptcms/">Nuzoo's schräge Schichten</a>

	<div class="navbar-responsive-collapse nav-collapse collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="/adaptcms/">Home</a></li>
						<li><a href="/adaptcms/admin">Admin</a></li>
									<li>
				<a href="http://localhost/adaptcms/forums">Forums</a>
			</li>
					</ul>
		<form action="/adaptcms/search" class="navbar-form col-lg-4 pull-left" id="SearchIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="dceae6eebc2b9ae8105609dec5cbe34be3ad5006" id="Token866098176"/></div>	<div class="col-lg-8 input-group">
		<input name="data[Search][q]" placeholder="Enter Keyword!..." class="form-control" type="text" id="SearchQ"/>		<span class="input-group-btn">
			<button class="btn" type="submit">Search</button>		</span>
	</div>
	<input type="hidden" name="data[Search][module]" value="1" id="SearchModule"/><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="c644d11c98ab788f6a47383f95d94927a97775fe%3ASearch.module" id="TokenFields770770315"/><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked100195854"/></div></form>		<p class="navbar-text pull-right">
			
			<?php if ($this->Session->check("Auth.User.username")): ?>
			Logged in as <a href="<?php echo $this->View->url('user_profile', $this->Session->read('Auth.User.username')) ?>" class="navbar-link"> <?php echo $this->Session->read('Auth.User.username') ?> </a>

			<?php if ( $this->Session->read('Auth.User.login_type') && $this->Session->read('Auth.User.login_type') == 'facebook'): ?>
			<?php echo $facebook_logout ?>
			<?php else: ?>
			<a href="<?php echo $this->View->url('logout') ?>" class="logout"> (logout)</a>
			<?php endif ?>
			<?php else: ?>
			Please <a href="<?php echo $this->View->url('login') ?>" class="navbar-link">login</a> or <a href="<?php echo $this->View->url('register') ?>" class="navbar-link">register</a>
			<?php endif ?>
			
		</p>
	</div>
	<!--/.nav-collapse -->
</div>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-lg-3 left-menu">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header">Links</li>
					<li>
						<a href="http://localhost/adaptcms/media">Media</a>
					</li>
					<li>
						<a href="http://localhost/adaptcms/rss/articles">RSS Feed</a>
					</li>
					<li>
						<a href="http://localhost/adaptcms/pages/contact-us">Contact Us</a>
					</li>
										<li>
						<a href="http://localhost/adaptcms/polls/list">Polls List</a>
					</li>
										<li class="nav-header">Categories</li>
					<li>
						<a href="http://localhost/adaptcms/category/news">News</a>
					</li>

										<li class="nav-header">Poll</li>

					
					<div class="span11 clearfix">
						<?php echo $this->Element('Polls.show_poll', array('data' => $block_data['show-poll'], 'permissions' => $block_permissions['show-poll'])) ?>
					</div>
					
					
									</ul>
			</div>
			<!--/.well -->
		</div>
		<!--/span-->
		<div class="col-lg-9 content">
			<ul class="breadcrumb"><li class="first"><a href="/adaptcms/">Home</a></li><li class="active">Media Index</li></ul>			
			<?php echo $this->Session->flash() ?>
			

			ste

<h1>Media Libraries</h1>

    <div class="well">
        No Libraries found
    </div>
		</div>
		<!--/span-->

		<hr>

		<div class="col-lg-12 footer">
			<p>
			      <span class="pull-left">
			          Powered by <a href="http://www.adaptcms.com" target="_blank">AdaptCMS 3.0.2</a>			      </span>
			      <span class="pull-right">
			        &copy;
				      2006-2014 <a href="http://www.adaptcms.com" target="_blank">AdaptCMS</a>				      <br/>
			        Cosmo theme by <a href="http://bootswatch.com/cosmo/" target="_blank">Bootswatch</a>			      </span>
			</p>
		</div>
	</div>
	<!--/row-->
</div>
<!--/.fluid-container-->

<div id="webroot" style="display:none">/adaptcms/</div></body>
</html>