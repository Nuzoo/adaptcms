<!--cachetime:1389327664--><?php
			App::uses('PagesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjEwOntzOjY6InBhcmFtcyI7YTo3OntzOjY6InBsdWdpbiI7TjtzOjEwOiJjb250cm9sbGVyIjtzOjU6InBhZ2VzIjtzOjY6ImFjdGlvbiI7czo3OiJkaXNwbGF5IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MTp7aTowO3M6MTA6ImNvbnRhY3QtdXMiO31zOjY6Il9Ub2tlbiI7YToyOntzOjM6ImtleSI7czo0MDoiMDVmMTE0MDVmNzIyZGQzOTViYmQ4ZTQ3MzljMzFkMDY0NWU2NDg0ZCI7czoxNDoidW5sb2NrZWRGaWVsZHMiO2E6MDp7fX1zOjY6Im1vZGVscyI7YTo2OntzOjQ6IlBhZ2UiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiUGFnZSI7fXM6MTA6IlBlcm1pc3Npb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTA6IlBlcm1pc3Npb24iO31zOjQ6IkNyb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiQ3JvbiI7fXM6MTI6IlNldHRpbmdWYWx1ZSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMjoiU2V0dGluZ1ZhbHVlIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjU6IkJsb2NrIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjU6IkJsb2NrIjt9fX1zOjQ6ImRhdGEiO2E6Mjp7czo0OiJQYWdlIjthOjc6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJ0aXRsZSI7czoxMDoiQ29udGFjdCBVcyI7czo0OiJzbHVnIjtzOjEwOiJjb250YWN0LXVzIjtzOjc6InVzZXJfaWQiO3M6MToiMSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjIyOjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjM3OjU3IjtzOjEyOiJkZWxldGVkX3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO31zOjQ6IlVzZXIiO2E6MTQ6e3M6MjoiaWQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czo0MDoiZjdiNTJjYWZkMWZjYTAyMDhiNjZjOThhNTFiODUxYTQ3YWRmYmQ3NiI7czo1OiJlbWFpbCI7czoyMToiYi5kaWdpdGl6ZWRAZ21haWwuY29tIjtzOjc6InJvbGVfaWQiO3M6MToiMSI7czoxMDoibG9naW5fdGltZSI7czoxOToiMjAxNC0wMS0wOSAwNDoyNToyNSI7czoxNjoic2VjdXJpdHlfYW5zd2VycyI7czoxMzY6InsiMSI6eyJxdWVzdGlvbiI6IldoYXQgd2FzIHlvdXIgbW90aGVycyBtYWlkZW4gbmFtZT8iLCJhbnN3ZXIiOiJtYXNjaGtlIn0sIjIiOnsicXVlc3Rpb24iOiJOYW1lIG9mIHlvdXIgZmlyc3QgcGV0PyIsImFuc3dlciI6ImtudWRkZWwifX0iO3M6ODoic2V0dGluZ3MiO3M6MTc6InsidGltZV96b25lIjoiMSJ9IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjg6InRoZW1lX2lkIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyNDowOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDo0ODoxNyI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjE1OiJsYXN0X3Jlc2V0X3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO319czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MTY6InBhZ2VzL2NvbnRhY3QtdXMiO3M6NDoiYmFzZSI7czo5OiIvYWRhcHRjbXMiO3M6Nzoid2Vicm9vdCI7czoxMDoiL2FkYXB0Y21zLyI7czo0OiJoZXJlIjtzOjI2OiIvYWRhcHRjbXMvcGFnZXMvY29udGFjdC11cyI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjtzOjY6InBsdWdpbiI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PagesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxMDp7czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjQ6IlRpbWUiO047czo1OiJDYWNoZSI7YToxOntzOjk6ImNsYXNzTmFtZSI7czoxMzoiQWRhcHRjbXNDYWNoZSI7fXM6MTA6IkF1dG9Mb2FkSlMiO047czo1OiJBZG1pbiI7TjtzOjk6IkFkYXB0SHRtbCI7TjtzOjQ6IlZpZXciO047czo3OiJTZXNzaW9uIjtOO3M6NToiRmllbGQiO047fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo4OntzOjQ6InBhZ2UiO2E6Mjp7czo0OiJQYWdlIjthOjc6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJ0aXRsZSI7czoxMDoiQ29udGFjdCBVcyI7czo0OiJzbHVnIjtzOjEwOiJjb250YWN0LXVzIjtzOjc6InVzZXJfaWQiO3M6MToiMSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjIyOjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjM3OjU3IjtzOjEyOiJkZWxldGVkX3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO31zOjQ6IlVzZXIiO2E6MTQ6e3M6MjoiaWQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czo0MDoiZjdiNTJjYWZkMWZjYTAyMDhiNjZjOThhNTFiODUxYTQ3YWRmYmQ3NiI7czo1OiJlbWFpbCI7czoyMToiYi5kaWdpdGl6ZWRAZ21haWwuY29tIjtzOjc6InJvbGVfaWQiO3M6MToiMSI7czoxMDoibG9naW5fdGltZSI7czoxOToiMjAxNC0wMS0wOSAwNDoyNToyNSI7czoxNjoic2VjdXJpdHlfYW5zd2VycyI7czoxMzY6InsiMSI6eyJxdWVzdGlvbiI6IldoYXQgd2FzIHlvdXIgbW90aGVycyBtYWlkZW4gbmFtZT8iLCJhbnN3ZXIiOiJtYXNjaGtlIn0sIjIiOnsicXVlc3Rpb24iOiJOYW1lIG9mIHlvdXIgZmlyc3QgcGV0PyIsImFuc3dlciI6ImtudWRkZWwifX0iO3M6ODoic2V0dGluZ3MiO3M6MTc6InsidGltZV96b25lIjoiMSJ9IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjg6InRoZW1lX2lkIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyNDowOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDo0ODoxNyI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjE1OiJsYXN0X3Jlc2V0X3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO319czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMDoiQ29udGFjdCBVcyI7czoxMjoiY3VycmVudF91c2VyIjthOjE0OntzOjI6ImlkIjtzOjE6IjEiO3M6ODoidXNlcm5hbWUiO3M6NToiYWRtaW4iO3M6NToiZW1haWwiO3M6MjE6ImIuZGlnaXRpemVkQGdtYWlsLmNvbSI7czo3OiJyb2xlX2lkIjtzOjE6IjEiO3M6MTA6ImxvZ2luX3RpbWUiO047czoxNjoic2VjdXJpdHlfYW5zd2VycyI7czoxMzY6InsiMSI6eyJxdWVzdGlvbiI6IldoYXQgd2FzIHlvdXIgbW90aGVycyBtYWlkZW4gbmFtZT8iLCJhbnN3ZXIiOiJtYXNjaGtlIn0sIjIiOnsicXVlc3Rpb24iOiJOYW1lIG9mIHlvdXIgZmlyc3QgcGV0PyIsImFuc3dlciI6ImtudWRkZWwifX0iO3M6ODoic2V0dGluZ3MiO3M6MDoiIjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjg6InRoZW1lX2lkIjtzOjE6IjAiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyNDowOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyNDowOCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjE1OiJsYXN0X3Jlc2V0X3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6NDoiUm9sZSI7YTo2OntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6NToiYWRtaW4iO3M6ODoiZGVmYXVsdHMiO3M6MTM6ImRlZmF1bHQtYWRtaW4iO3M6NzoiY3JlYXRlZCI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjt9fXM6MTE6InBlcm1pc3Npb25zIjthOjE0OntzOjI6ImlkIjtzOjI6IjM2IjtzOjU6ImxhYmVsIjtOO3M6OToibW9kdWxlX2lkIjtzOjI6IjEwIjtzOjc6InJvbGVfaWQiO3M6MToiMSI7czo5OiJhY3Rpb25faWQiO3M6MToiMCI7czo2OiJwbHVnaW4iO3M6MDoiIjtzOjEwOiJjb250cm9sbGVyIjtzOjU6InBhZ2VzIjtzOjY6ImFjdGlvbiI7czo3OiJkaXNwbGF5IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjc6InJlbGF0ZWQiO2E6MTp7czo4OiJhcnRpY2xlcyI7YToxOntzOjQ6InZpZXciO2E6MTQ6e3M6MjoiaWQiO3M6MjoiMjYiO3M6NToibGFiZWwiO047czo5OiJtb2R1bGVfaWQiO3M6MToiMSI7czo3OiJyb2xlX2lkIjtzOjE6IjEiO3M6OToiYWN0aW9uX2lkIjtzOjE6IjAiO3M6NjoicGx1Z2luIjtzOjA6IiI7czoxMDoiY29udHJvbGxlciI7czo4OiJhcnRpY2xlcyI7czo2OiJhY3Rpb24iO3M6NDoidmlldyI7czo2OiJzdGF0dXMiO3M6MToiMSI7czo3OiJyZWxhdGVkIjtzOjE2MToiW3siYWN0aW9uIjpbImFqYXhfcG9zdCJdLCAiY29udHJvbGxlciI6WyJjb21tZW50cyJdfSx7ImFjdGlvbiI6WyJhZG1pbl9lZGl0Il0sICJjb250cm9sbGVyIjpbImNvbW1lbnRzIl19LHsiYWN0aW9uIjpbImFkbWluX2RlbGV0ZSJdLCAiY29udHJvbGxlciI6WyJjb21tZW50cyJdfV0iO3M6Mzoib3duIjtzOjE6IjEiO3M6MzoiYW55IjtzOjE6IjEiO3M6OToib3duX2xhYmVsIjtzOjM6Ik93biI7czo5OiJhbnlfbGFiZWwiO3M6MzoiQW55Ijt9fX1zOjM6Im93biI7czoxOiIyIjtzOjM6ImFueSI7czoxOiIyIjtzOjk6Im93bl9sYWJlbCI7czozOiJPd24iO3M6OToiYW55X2xhYmVsIjtzOjM6IkFueSI7fXM6ODoidXNlcm5hbWUiO3M6NToiYWRtaW4iO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNTA6IjxoMT5Db250YWN0IFVzPC9oMT4NCg0KPGgyPk91ciBMb2NhdGlvbjwvaDI+DQoNCiAgDQo8aDI+Q29udGFjdCBJbmZvPC9oMj4NCg0KMTYwMCBQZW5uc3lsdmFuaWEgQXZlIE53PGJyIC8+DQpXYXNoaW5ndG9uIERDPGJyIC8+PGJyIC8+DQooMjAyKSA0NTYtMTExMSI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxMDoiYmxvY2tfZGF0YSI7YToxOntzOjk6InNob3ctcG9sbCI7YTo0OntzOjQ6IlBvbGwiO2E6MTI6e3M6MjoiaWQiO3M6MToiMSI7czoxMDoiYXJ0aWNsZV9pZCI7TjtzOjU6InRpdGxlIjtzOjI4OiJXaGF0IGlzIHlvdXIgZmF2b3JpdGUgc3BvcnQ/IjtzOjk6InBvbGxfdHlwZSI7TjtzOjc6InVzZXJfaWQiO3M6MToiMSI7czoxMDoic3RhcnRfZGF0ZSI7TjtzOjg6ImVuZF9kYXRlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjExOiJ0b3RhbF92b3RlcyI7aToxO3M6ODoiY2FuX3ZvdGUiO2I6MDt9czo5OiJQb2xsVmFsdWUiO2E6NTp7aTowO2E6NTp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjM6Ik5CQSI7czo3OiJwb2xsX2lkIjtzOjE6IjEiO3M6NToidm90ZXMiO3M6MToiMCI7czo3OiJwZXJjZW50IjtkOjA7fWk6MTthOjU6e3M6MjoiaWQiO3M6MToiMiI7czo1OiJ0aXRsZSI7czozOiJOSEwiO3M6NzoicG9sbF9pZCI7czoxOiIxIjtzOjU6InZvdGVzIjtzOjE6IjAiO3M6NzoicGVyY2VudCI7ZDowO31pOjI7YTo1OntzOjI6ImlkIjtzOjE6IjMiO3M6NToidGl0bGUiO3M6NjoiU29jY2VyIjtzOjc6InBvbGxfaWQiO3M6MToiMSI7czo1OiJ2b3RlcyI7czoxOiIxIjtzOjc6InBlcmNlbnQiO2Q6MTAwO31pOjM7YTo1OntzOjI6ImlkIjtzOjE6IjQiO3M6NToidGl0bGUiO3M6MzoiTkZMIjtzOjc6InBvbGxfaWQiO3M6MToiMSI7czo1OiJ2b3RlcyI7czoxOiIwIjtzOjc6InBlcmNlbnQiO2Q6MDt9aTo0O2E6NTp7czoyOiJpZCI7czoxOiI1IjtzOjU6InRpdGxlIjtzOjM6Ik1MQiI7czo3OiJwb2xsX2lkIjtzOjE6IjEiO3M6NToidm90ZXMiO3M6MToiMCI7czo3OiJwZXJjZW50IjtkOjA7fX1zOjc6Im9wdGlvbnMiO2E6NTp7aToxO3M6MzoiTkJBIjtpOjI7czozOiJOSEwiO2k6MztzOjY6IlNvY2NlciI7aTo0O3M6MzoiTkZMIjtpOjU7czozOiJNTEIiO31zOjU6IkJsb2NrIjthOjExOntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6OToic2hvdy1wb2xsIjtzOjQ6InR5cGUiO3M6NzoiZHluYW1pYyI7czo5OiJtb2R1bGVfaWQiO3M6MToiOCI7czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6NToibGltaXQiO3M6MToiMSI7czo0OiJkYXRhIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjIyOjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjIyOjM0IjtzOjEyOiJkZWxldGVkX3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6NjoiTW9kdWxlIjthOjc6e3M6MjoiaWQiO3M6MToiOCI7czo1OiJ0aXRsZSI7czo1OiJQb2xscyI7czoxMToibW9kZWxfdGl0bGUiO3M6NDoiUG9sbCI7czoxMjoiYmxvY2tfYWN0aXZlIjtzOjE6IjEiO3M6OToiaXNfcGx1Z2luIjtzOjE6IjEiO3M6MTM6ImlzX3NlYXJjaGFibGUiO3M6MToiMCI7czo5OiJpc19maWVsZHMiO3M6MToiMCI7fX19fX0='));
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
		AdaptCMS 3.0.2 | Contact Us	</title>

	<link href="/adaptcms/adaptcms/img/favicon.ico" type="image/x-icon" rel="icon" /><link href="/adaptcms/adaptcms/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	
<script type="text/javascript" src="/adaptcms/js/jquery.min.js"></script><script type="text/javascript" src="/adaptcms/js/jquery.validate.min.js"></script><script type="text/javascript" src="/adaptcms/js/bootstrap.min.js"></script><script type="text/javascript" src="/adaptcms/js/vendor/noty/jquery.noty.js"></script><script type="text/javascript" src="/adaptcms/js/vendor/noty/layouts/bottomRight.js"></script><script type="text/javascript" src="/adaptcms/js/vendor/noty/themes/default.js"></script><script type="text/javascript" src="/adaptcms/js/global.js"></script>

<script type="text/javascript" src="/adaptcms/links/js/global.js"></script><script type="text/javascript" src="/adaptcms/polls/js/global.js"></script>			

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
	<a class="navbar-brand" href="/adaptcms/">AdaptCMS 3.0.2</a>

	<div class="navbar-responsive-collapse nav-collapse collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="/adaptcms/">Home</a></li>
						<li><a href="/adaptcms/admin">Admin</a></li>
									<li>
				<a href="http://localhost/adaptcms/forums">Forums</a>
			</li>
					</ul>
		<form action="/adaptcms/search" class="navbar-form col-lg-4 pull-left" id="SearchDisplayForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="05f11405f722dd395bbd8e4739c31d0645e6484d" id="Token484214340"/></div>	<div class="col-lg-8 input-group">
		<input name="data[Search][q]" placeholder="Enter Keyword!..." class="form-control" type="text" id="SearchQ"/>		<span class="input-group-btn">
			<button class="btn" type="submit">Search</button>		</span>
	</div>
	<input type="hidden" name="data[Search][module]" value="1" id="SearchModule"/><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="c644d11c98ab788f6a47383f95d94927a97775fe%3ASearch.module" id="TokenFields1176535442"/><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked1186213336"/></div></form>		<p class="navbar-text pull-right">
			
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
			<ul class="breadcrumb"><li class="first"><a href="/adaptcms/">Home</a></li></ul>			
			<?php echo $this->Session->flash() ?>
			

			<h1>Contact Us</h1>

<h2>Our Location</h2>

  
<h2>Contact Info</h2>

1600 Pennsylvania Ave Nw<br />
Washington DC<br /><br />
(202) 456-1111		</div>
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