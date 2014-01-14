<!--cachetime:1389327684--><?php
			App::uses('CategoriesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjEwOntzOjY6InBhcmFtcyI7YTo4OntzOjY6InBsdWdpbiI7TjtzOjEwOiJjb250cm9sbGVyIjtzOjEwOiJjYXRlZ29yaWVzIjtzOjY6ImFjdGlvbiI7czo0OiJ2aWV3IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MTp7aTowO3M6NDoibmV3cyI7fXM6NjoiX1Rva2VuIjthOjI6e3M6Mzoia2V5IjtzOjQwOiI4OTRmNmZhODc1Zjc1OThmODU2NmEwNmY1MjVkYmQ3MDNmMDFlMDhjIjtzOjE0OiJ1bmxvY2tlZEZpZWxkcyI7YTowOnt9fXM6NjoicGFnaW5nIjthOjE6e3M6NzoiQXJ0aWNsZSI7YToxMDp7czo0OiJwYWdlIjtpOjE7czo3OiJjdXJyZW50IjtpOjE7czo1OiJjb3VudCI7aToxO3M6ODoicHJldlBhZ2UiO2I6MDtzOjg6Im5leHRQYWdlIjtiOjA7czo5OiJwYWdlQ291bnQiO2k6MTtzOjU6Im9yZGVyIjtzOjIwOiJBcnRpY2xlLmNyZWF0ZWQgREVTQyI7czo1OiJsaW1pdCI7aToxMDtzOjc6Im9wdGlvbnMiO2E6MDp7fXM6OToicGFyYW1UeXBlIjtzOjU6Im5hbWVkIjt9fXM6NjoibW9kZWxzIjthOjEwOntzOjg6IkNhdGVnb3J5IjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkNhdGVnb3J5Ijt9czoxMDoiUGVybWlzc2lvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMDoiUGVybWlzc2lvbiI7fXM6NDoiQ3JvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJDcm9uIjt9czoxMjoiU2V0dGluZ1ZhbHVlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEyOiJTZXR0aW5nVmFsdWUiO31zOjc6IkFydGljbGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiQXJ0aWNsZSI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czoxMjoiQXJ0aWNsZVZhbHVlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEyOiJBcnRpY2xlVmFsdWUiO31zOjc6IkNvbW1lbnQiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NzoiQ29tbWVudCI7fXM6NToiRmllbGQiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NToiRmllbGQiO31zOjU6IkJsb2NrIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjU6IkJsb2NrIjt9fX1zOjQ6ImRhdGEiO2E6MTp7aTowO2E6Nzp7czo3OiJBcnRpY2xlIjthOjEzOntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6MjY6IldlbGNvbWUgdG8gQWRhcHRDTVMgMy4wLjIhIjtzOjQ6InNsdWciO3M6MjU6IndlbGNvbWUtdG8tYWRhcHRjbXMtMy0wLTIiO3M6NDoidGFncyI7TjtzOjE2OiJyZWxhdGVkX2FydGljbGVzIjtzOjA6IiI7czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjE6IjEiO3M6Njoic3RhdHVzIjtzOjE6IjEiO3M6MTI6InB1Ymxpc2hfdGltZSI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czo4OiJzZXR0aW5ncyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6ODoiQ2F0ZWdvcnkiO2E6ODp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjQ6Ik5ld3MiO3M6NDoic2x1ZyI7czo0OiJuZXdzIjtzOjg6InNldHRpbmdzIjtOO3M6NzoidXNlcl9pZCI7czoxOiIxIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6NDoiVXNlciI7YToxNDp7czoyOiJpZCI7czoxOiIxIjtzOjg6InVzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjg6InBhc3N3b3JkIjtzOjQwOiJmN2I1MmNhZmQxZmNhMDIwOGI2NmM5OGE1MWI4NTFhNDdhZGZiZDc2IjtzOjU6ImVtYWlsIjtzOjIxOiJiLmRpZ2l0aXplZEBnbWFpbC5jb20iO3M6Nzoicm9sZV9pZCI7czoxOiIxIjtzOjEwOiJsb2dpbl90aW1lIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjI1OjI1IjtzOjE2OiJzZWN1cml0eV9hbnN3ZXJzIjtzOjEzNjoieyIxIjp7InF1ZXN0aW9uIjoiV2hhdCB3YXMgeW91ciBtb3RoZXJzIG1haWRlbiBuYW1lPyIsImFuc3dlciI6Im1hc2Noa2UifSwiMiI6eyJxdWVzdGlvbiI6Ik5hbWUgb2YgeW91ciBmaXJzdCBwZXQ/IiwiYW5zd2VyIjoia251ZGRlbCJ9fSI7czo4OiJzZXR0aW5ncyI7czoxNzoieyJ0aW1lX3pvbmUiOiIxIn0iO3M6Njoic3RhdHVzIjtzOjE6IjEiO3M6ODoidGhlbWVfaWQiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjI0OjA4IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjQ4OjE3IjtzOjEyOiJkZWxldGVkX3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6MTU6Imxhc3RfcmVzZXRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6MTI6IkFydGljbGVWYWx1ZSI7YToxOntpOjA7YTo2OntzOjI6ImlkIjtzOjE6IjEiO3M6MTA6ImFydGljbGVfaWQiO3M6MToiMSI7czo4OiJmaWVsZF9pZCI7czoxOiIxIjtzOjc6ImZpbGVfaWQiO3M6MToiMCI7czo0OiJkYXRhIjtzOjMyMToiPHA+V2UgaG9wZSB5b3UgZW5qb3kgeW91ciBuZXdseSBpbnN0YWxsZWQgY29weSBvZiBBZGFwdENNUy4gQmUgc3VyZSB0byBjaGVjayB0aGUgPGEgaHJlZj0iaHR0cDovL3d3dy5hZGFwdGNtcy5jb20iIHRhcmdldD0iX2JsYW5rIj5vZmZpY2lhbCB3ZWJzaXRlPC9hPiBmb3IgZG9jdW1lbnRhdGlvbiBvbiB0aGUgQ01TIGFuZCB5b3UgY2FuIGdldCBzdXBwb3J0IDxhIGhyZWY9Imh0dHA6Ly93d3cuYWRhcHRjbXMuY29tL3N1cHBvcnQiIHRhcmdldD0iX2JsYW5rIj5oZXJlPC9hPi4gRW5qb3khPC9wPg0KPHA+VGhhbmsgeW91LDxiciAvPkFkYXB0Q01TIFRlYW08L3A+IjtzOjU6IkZpZWxkIjthOjE3OntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6Nzoic3VtbWFyeSI7czo1OiJsYWJlbCI7czo3OiJzdW1tYXJ5IjtzOjExOiJmaWVsZF9vcmRlciI7czoxOiIwIjtzOjExOiJjYXRlZ29yeV9pZCI7czoxOiIxIjtzOjk6Im1vZHVsZV9pZCI7czoxOiIwIjtzOjEzOiJmaWVsZF90eXBlX2lkIjtzOjI6IjExIjtzOjE1OiJmaWVsZF90eXBlX3NsdWciO3M6ODoidGV4dGFyZWEiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjU1OiJZb3Ugb3VnaHQgdG8gZW50ZXIgYSBzaG9ydCBzdW1tYXJ5IG9mIHRoZSBuZXdzIGFydGljbGUuIjtzOjEzOiJmaWVsZF9vcHRpb25zIjtzOjA6IiI7czoxNToiZmllbGRfbGltaXRfbWluIjtzOjE6IjAiO3M6MTU6ImZpZWxkX2xpbWl0X21heCI7czoxOiIwIjtzOjg6InJlcXVpcmVkIjtzOjE6IjEiO3M6NzoidXNlcl9pZCI7czoxOiIxIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fX19czo4OiJDb21tZW50cyI7aTowO3M6MTU6IlJlbGF0ZWRBcnRpY2xlcyI7YToyOntzOjM6ImFsbCI7YTowOnt9czo4OiJjYXRlZ29yeSI7YTowOnt9fXM6NDoiRGF0YSI7YToxOntzOjc6InN1bW1hcnkiO3M6MzIxOiI8cD5XZSBob3BlIHlvdSBlbmpveSB5b3VyIG5ld2x5IGluc3RhbGxlZCBjb3B5IG9mIEFkYXB0Q01TLiBCZSBzdXJlIHRvIGNoZWNrIHRoZSA8YSBocmVmPSJodHRwOi8vd3d3LmFkYXB0Y21zLmNvbSIgdGFyZ2V0PSJfYmxhbmsiPm9mZmljaWFsIHdlYnNpdGU8L2E+IGZvciBkb2N1bWVudGF0aW9uIG9uIHRoZSBDTVMgYW5kIHlvdSBjYW4gZ2V0IHN1cHBvcnQgPGEgaHJlZj0iaHR0cDovL3d3dy5hZGFwdGNtcy5jb20vc3VwcG9ydCIgdGFyZ2V0PSJfYmxhbmsiPmhlcmU8L2E+LiBFbmpveSE8L3A+DQo8cD5UaGFuayB5b3UsPGJyIC8+QWRhcHRDTVMgVGVhbTwvcD4iO319fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjEzOiJjYXRlZ29yeS9uZXdzIjtzOjQ6ImJhc2UiO3M6OToiL2FkYXB0Y21zIjtzOjc6IndlYnJvb3QiO3M6MTA6Ii9hZGFwdGNtcy8iO3M6NDoiaGVyZSI7czoyMzoiL2FkYXB0Y21zL2NhdGVnb3J5L25ld3MiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7czo2OiJwbHVnaW4iO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new CategoriesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YToxMDp7aTowO3M6NDoiSHRtbCI7aToxO3M6NDoiRm9ybSI7aToyO3M6NDoiVGltZSI7czo1OiJDYWNoZSI7YToxOntzOjk6ImNsYXNzTmFtZSI7czoxMzoiQWRhcHRjbXNDYWNoZSI7fWk6MztzOjEwOiJBdXRvTG9hZEpTIjtpOjQ7czo1OiJBZG1pbiI7aTo1O3M6OToiQWRhcHRIdG1sIjtpOjY7czo0OiJWaWV3IjtpOjc7czo3OiJTZXNzaW9uIjtpOjg7czo5OiJQYWdpbmF0b3IiO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjQ6Ik5ld3MiO3M6ODoiYXJ0aWNsZXMiO2E6MTp7aTowO2E6Nzp7czo3OiJBcnRpY2xlIjthOjEzOntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6MjY6IldlbGNvbWUgdG8gQWRhcHRDTVMgMy4wLjIhIjtzOjQ6InNsdWciO3M6MjU6IndlbGNvbWUtdG8tYWRhcHRjbXMtMy0wLTIiO3M6NDoidGFncyI7TjtzOjE2OiJyZWxhdGVkX2FydGljbGVzIjtzOjA6IiI7czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjE6IjEiO3M6Njoic3RhdHVzIjtzOjE6IjEiO3M6MTI6InB1Ymxpc2hfdGltZSI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czo4OiJzZXR0aW5ncyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6ODoiQ2F0ZWdvcnkiO2E6ODp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjQ6Ik5ld3MiO3M6NDoic2x1ZyI7czo0OiJuZXdzIjtzOjg6InNldHRpbmdzIjtOO3M6NzoidXNlcl9pZCI7czoxOiIxIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6NDoiVXNlciI7YToxNDp7czoyOiJpZCI7czoxOiIxIjtzOjg6InVzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjg6InBhc3N3b3JkIjtzOjQwOiJmN2I1MmNhZmQxZmNhMDIwOGI2NmM5OGE1MWI4NTFhNDdhZGZiZDc2IjtzOjU6ImVtYWlsIjtzOjIxOiJiLmRpZ2l0aXplZEBnbWFpbC5jb20iO3M6Nzoicm9sZV9pZCI7czoxOiIxIjtzOjEwOiJsb2dpbl90aW1lIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjI1OjI1IjtzOjE2OiJzZWN1cml0eV9hbnN3ZXJzIjtzOjEzNjoieyIxIjp7InF1ZXN0aW9uIjoiV2hhdCB3YXMgeW91ciBtb3RoZXJzIG1haWRlbiBuYW1lPyIsImFuc3dlciI6Im1hc2Noa2UifSwiMiI6eyJxdWVzdGlvbiI6Ik5hbWUgb2YgeW91ciBmaXJzdCBwZXQ/IiwiYW5zd2VyIjoia251ZGRlbCJ9fSI7czo4OiJzZXR0aW5ncyI7czoxNzoieyJ0aW1lX3pvbmUiOiIxIn0iO3M6Njoic3RhdHVzIjtzOjE6IjEiO3M6ODoidGhlbWVfaWQiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjI0OjA4IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjQ4OjE3IjtzOjEyOiJkZWxldGVkX3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6MTU6Imxhc3RfcmVzZXRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6MTI6IkFydGljbGVWYWx1ZSI7YToxOntpOjA7YTo2OntzOjI6ImlkIjtzOjE6IjEiO3M6MTA6ImFydGljbGVfaWQiO3M6MToiMSI7czo4OiJmaWVsZF9pZCI7czoxOiIxIjtzOjc6ImZpbGVfaWQiO3M6MToiMCI7czo0OiJkYXRhIjtzOjMyMToiPHA+V2UgaG9wZSB5b3UgZW5qb3kgeW91ciBuZXdseSBpbnN0YWxsZWQgY29weSBvZiBBZGFwdENNUy4gQmUgc3VyZSB0byBjaGVjayB0aGUgPGEgaHJlZj0iaHR0cDovL3d3dy5hZGFwdGNtcy5jb20iIHRhcmdldD0iX2JsYW5rIj5vZmZpY2lhbCB3ZWJzaXRlPC9hPiBmb3IgZG9jdW1lbnRhdGlvbiBvbiB0aGUgQ01TIGFuZCB5b3UgY2FuIGdldCBzdXBwb3J0IDxhIGhyZWY9Imh0dHA6Ly93d3cuYWRhcHRjbXMuY29tL3N1cHBvcnQiIHRhcmdldD0iX2JsYW5rIj5oZXJlPC9hPi4gRW5qb3khPC9wPg0KPHA+VGhhbmsgeW91LDxiciAvPkFkYXB0Q01TIFRlYW08L3A+IjtzOjU6IkZpZWxkIjthOjE3OntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6Nzoic3VtbWFyeSI7czo1OiJsYWJlbCI7czo3OiJzdW1tYXJ5IjtzOjExOiJmaWVsZF9vcmRlciI7czoxOiIwIjtzOjExOiJjYXRlZ29yeV9pZCI7czoxOiIxIjtzOjk6Im1vZHVsZV9pZCI7czoxOiIwIjtzOjEzOiJmaWVsZF90eXBlX2lkIjtzOjI6IjExIjtzOjE1OiJmaWVsZF90eXBlX3NsdWciO3M6ODoidGV4dGFyZWEiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjU1OiJZb3Ugb3VnaHQgdG8gZW50ZXIgYSBzaG9ydCBzdW1tYXJ5IG9mIHRoZSBuZXdzIGFydGljbGUuIjtzOjEzOiJmaWVsZF9vcHRpb25zIjtzOjA6IiI7czoxNToiZmllbGRfbGltaXRfbWluIjtzOjE6IjAiO3M6MTU6ImZpZWxkX2xpbWl0X21heCI7czoxOiIwIjtzOjg6InJlcXVpcmVkIjtzOjE6IjEiO3M6NzoidXNlcl9pZCI7czoxOiIxIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fX19czo4OiJDb21tZW50cyI7aTowO3M6MTU6IlJlbGF0ZWRBcnRpY2xlcyI7YToyOntzOjM6ImFsbCI7YTowOnt9czo4OiJjYXRlZ29yeSI7YTowOnt9fXM6NDoiRGF0YSI7YToxOntzOjc6InN1bW1hcnkiO3M6MzIxOiI8cD5XZSBob3BlIHlvdSBlbmpveSB5b3VyIG5ld2x5IGluc3RhbGxlZCBjb3B5IG9mIEFkYXB0Q01TLiBCZSBzdXJlIHRvIGNoZWNrIHRoZSA8YSBocmVmPSJodHRwOi8vd3d3LmFkYXB0Y21zLmNvbSIgdGFyZ2V0PSJfYmxhbmsiPm9mZmljaWFsIHdlYnNpdGU8L2E+IGZvciBkb2N1bWVudGF0aW9uIG9uIHRoZSBDTVMgYW5kIHlvdSBjYW4gZ2V0IHN1cHBvcnQgPGEgaHJlZj0iaHR0cDovL3d3dy5hZGFwdGNtcy5jb20vc3VwcG9ydCIgdGFyZ2V0PSJfYmxhbmsiPmhlcmU8L2E+LiBFbmpveSE8L3A+DQo8cD5UaGFuayB5b3UsPGJyIC8+QWRhcHRDTVMgVGVhbTwvcD4iO319fXM6ODoiY2F0ZWdvcnkiO2E6ODp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjQ6Ik5ld3MiO3M6NDoic2x1ZyI7czo0OiJuZXdzIjtzOjg6InNldHRpbmdzIjtOO3M6NzoidXNlcl9pZCI7czoxOiIxIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fXM6MTI6ImN1cnJlbnRfdXNlciI7YToxNDp7czoyOiJpZCI7czoxOiIxIjtzOjg6InVzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjU6ImVtYWlsIjtzOjIxOiJiLmRpZ2l0aXplZEBnbWFpbC5jb20iO3M6Nzoicm9sZV9pZCI7czoxOiIxIjtzOjEwOiJsb2dpbl90aW1lIjtOO3M6MTY6InNlY3VyaXR5X2Fuc3dlcnMiO3M6MTM2OiJ7IjEiOnsicXVlc3Rpb24iOiJXaGF0IHdhcyB5b3VyIG1vdGhlcnMgbWFpZGVuIG5hbWU/IiwiYW5zd2VyIjoibWFzY2hrZSJ9LCIyIjp7InF1ZXN0aW9uIjoiTmFtZSBvZiB5b3VyIGZpcnN0IHBldD8iLCJhbnN3ZXIiOiJrbnVkZGVsIn19IjtzOjg6InNldHRpbmdzIjtzOjA6IiI7czo2OiJzdGF0dXMiO3M6MToiMSI7czo4OiJ0aGVtZV9pZCI7czoxOiIwIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjQ6MDgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjQ6MDgiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7czoxNToibGFzdF9yZXNldF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjQ6IlJvbGUiO2E6Njp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjU6ImFkbWluIjtzOjg6ImRlZmF1bHRzIjtzOjEzOiJkZWZhdWx0LWFkbWluIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDEtMDkgMDQ6MjI6MzQiO3M6MTI6ImRlbGV0ZWRfdGltZSI7czoxOToiMDAwMC0wMC0wMCAwMDowMDowMCI7fX1zOjExOiJwZXJtaXNzaW9ucyI7YToxNDp7czoyOiJpZCI7czoyOiIzNSI7czo1OiJsYWJlbCI7TjtzOjk6Im1vZHVsZV9pZCI7czoxOiIzIjtzOjc6InJvbGVfaWQiO3M6MToiMSI7czo5OiJhY3Rpb25faWQiO3M6MToiMCI7czo2OiJwbHVnaW4iO3M6MDoiIjtzOjEwOiJjb250cm9sbGVyIjtzOjEwOiJjYXRlZ29yaWVzIjtzOjY6ImFjdGlvbiI7czo0OiJ2aWV3IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjc6InJlbGF0ZWQiO047czozOiJvd24iO3M6MToiMSI7czozOiJhbnkiO3M6MToiMSI7czo5OiJvd25fbGFiZWwiO3M6MzoiT3duIjtzOjk6ImFueV9sYWJlbCI7czozOiJBbnkiO31zOjg6InVzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTM0ODoiCgo8aDE+TmV3czwvaDE+CgoJCQk8ZGl2IGNsYXNzPSJzcGFuOCBuby1tYXJnLWxlZnQgY2xlYXJmaXgiPgoJCQk8YSBocmVmPSJodHRwOi8vbG9jYWxob3N0L2FkYXB0Y21zL2FydGljbGUvMS93ZWxjb21lLXRvLWFkYXB0Y21zLTMtMC0yIj48aDI+V2VsY29tZSB0byBBZGFwdENNUyAzLjAuMiE8L2gyPjwvYT4KCQkJPHAgY2xhc3M9ImxlYWQiPgoJCQkJQCA8ZW0+SmFudWFyeSA5dGgsIDIwMTQgMDQ6MjIgQU08L2VtPgoJCQk8L3A+CgoJCQk8YmxvY2txdW90ZT4KCQkJCTxwPldlIGhvcGUgeW91IGVuam95IHlvdXIgbmV3bHkgaW5zdGFsbGVkIGNvcHkgb2YgQWRhcHRDTVMuIEJlIHN1cmUgdG8gY2hlY2sgdGhlIDxhIGhyZWY9Imh0dHA6Ly93d3cuYWRhcHRjbXMuY29tIiB0YXJnZXQ9Il9ibGFuayI+b2ZmaWNpYWwgd2Vic2l0ZTwvYT4gZm9yIGRvY3VtZW50YXRpb24gb24gdGhlIENNUyBhbmQgeW91IGNhbiBnZXQgc3VwcG9ydCA8YSBocmVmPSJodHRwOi8vd3d3LmFkYXB0Y21zLmNvbS9zdXBwb3J0IiB0YXJnZXQ9Il9ibGFuayI+aGVyZTwvYT4uIEVuam95ITwvcD4NCjxwPlRoYW5rIHlvdSw8YnIgLz5BZGFwdENNUyBUZWFtPC9wPgkJCTwvYmxvY2txdW90ZT4KCgkJCTxkaXYgaWQ9InBvc3Qtb3B0aW9ucyI+CgkJICAgICAgICA8c3BhbiBjbGFzcz0icHVsbC1sZWZ0Ij4KCQkJICAgICAgICA8YSBocmVmPSJodHRwOi8vbG9jYWxob3N0L2FkYXB0Y21zL2FydGljbGUvMS93ZWxjb21lLXRvLWFkYXB0Y21zLTMtMC0yIiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5Ij5SZWFkIE1vcmU8L2E+CgkJCSAgICAgICAgPHNwYW4gc3R5bGU9Im1hcmdpbi1sZWZ0OiAxMHB4Ij4KCQkgICAgICAgICAgICAgICAgPGkgY2xhc3M9Imljb24gaWNvbi1jb21tZW50Ij48L2k+Jm5ic3A7CgkJCQkgICAgICAgIDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvYWRhcHRjbXMvYXJ0aWNsZS8xL3dlbGNvbWUtdG8tYWRhcHRjbXMtMy0wLTIjY29tbWVudHMiPjAgQ29tbWVudHM8L2E+CgkJICAgICAgICAgICAgPC9zcGFuPgoJCSAgICAgICAgICAgIDxzcGFuIHN0eWxlPSJtYXJnaW4tbGVmdDogMTBweCI+CgkJICAgICAgICAgICAgICAgIDxpIGNsYXNzPSJpY29uLXVzZXIiPjwvaT4mbmJzcDsKCQkgICAgICAgICAgICAgICAgUG9zdGVkIGJ5IDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvYWRhcHRjbXMvdXNlcnMvcHJvZmlsZS9hZG1pbiI+YWRtaW48L2E+CgkJICAgICAgICAgICAgPC9zcGFuPgoJCSAgICAgICAgPC9zcGFuPgoJCSAgICAgICAgPHNwYW4gY2xhc3M9InB1bGwtcmlnaHQiPgoJCQkgICAgICAgIAkJICAgICAgICA8L3NwYW4+CgkJCTwvZGl2PgoJCTwvZGl2PgoJCTxocj4KCQoJCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxMDoiYmxvY2tfZGF0YSI7YToxOntzOjk6InNob3ctcG9sbCI7YTo0OntzOjQ6IlBvbGwiO2E6MTI6e3M6MjoiaWQiO3M6MToiMSI7czoxMDoiYXJ0aWNsZV9pZCI7TjtzOjU6InRpdGxlIjtzOjI4OiJXaGF0IGlzIHlvdXIgZmF2b3JpdGUgc3BvcnQ/IjtzOjk6InBvbGxfdHlwZSI7TjtzOjc6InVzZXJfaWQiO3M6MToiMSI7czoxMDoic3RhcnRfZGF0ZSI7TjtzOjg6ImVuZF9kYXRlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMS0wOSAwNDoyMjozNCI7czoxMjoiZGVsZXRlZF90aW1lIjtzOjE5OiIwMDAwLTAwLTAwIDAwOjAwOjAwIjtzOjExOiJ0b3RhbF92b3RlcyI7aToxO3M6ODoiY2FuX3ZvdGUiO2I6MDt9czo5OiJQb2xsVmFsdWUiO2E6NTp7aTowO2E6NTp7czoyOiJpZCI7czoxOiIxIjtzOjU6InRpdGxlIjtzOjM6Ik5CQSI7czo3OiJwb2xsX2lkIjtzOjE6IjEiO3M6NToidm90ZXMiO3M6MToiMCI7czo3OiJwZXJjZW50IjtkOjA7fWk6MTthOjU6e3M6MjoiaWQiO3M6MToiMiI7czo1OiJ0aXRsZSI7czozOiJOSEwiO3M6NzoicG9sbF9pZCI7czoxOiIxIjtzOjU6InZvdGVzIjtzOjE6IjAiO3M6NzoicGVyY2VudCI7ZDowO31pOjI7YTo1OntzOjI6ImlkIjtzOjE6IjMiO3M6NToidGl0bGUiO3M6NjoiU29jY2VyIjtzOjc6InBvbGxfaWQiO3M6MToiMSI7czo1OiJ2b3RlcyI7czoxOiIxIjtzOjc6InBlcmNlbnQiO2Q6MTAwO31pOjM7YTo1OntzOjI6ImlkIjtzOjE6IjQiO3M6NToidGl0bGUiO3M6MzoiTkZMIjtzOjc6InBvbGxfaWQiO3M6MToiMSI7czo1OiJ2b3RlcyI7czoxOiIwIjtzOjc6InBlcmNlbnQiO2Q6MDt9aTo0O2E6NTp7czoyOiJpZCI7czoxOiI1IjtzOjU6InRpdGxlIjtzOjM6Ik1MQiI7czo3OiJwb2xsX2lkIjtzOjE6IjEiO3M6NToidm90ZXMiO3M6MToiMCI7czo3OiJwZXJjZW50IjtkOjA7fX1zOjc6Im9wdGlvbnMiO2E6NTp7aToxO3M6MzoiTkJBIjtpOjI7czozOiJOSEwiO2k6MztzOjY6IlNvY2NlciI7aTo0O3M6MzoiTkZMIjtpOjU7czozOiJNTEIiO31zOjU6IkJsb2NrIjthOjExOntzOjI6ImlkIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6OToic2hvdy1wb2xsIjtzOjQ6InR5cGUiO3M6NzoiZHluYW1pYyI7czo5OiJtb2R1bGVfaWQiO3M6MToiOCI7czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6NToibGltaXQiO3M6MToiMSI7czo0OiJkYXRhIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjIyOjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTAxLTA5IDA0OjIyOjM0IjtzOjEyOiJkZWxldGVkX3RpbWUiO3M6MTk6IjAwMDAtMDAtMDAgMDA6MDA6MDAiO3M6NjoiTW9kdWxlIjthOjc6e3M6MjoiaWQiO3M6MToiOCI7czo1OiJ0aXRsZSI7czo1OiJQb2xscyI7czoxMToibW9kZWxfdGl0bGUiO3M6NDoiUG9sbCI7czoxMjoiYmxvY2tfYWN0aXZlIjtzOjE6IjEiO3M6OToiaXNfcGx1Z2luIjtzOjE6IjEiO3M6MTM6ImlzX3NlYXJjaGFibGUiO3M6MToiMCI7czo5OiJpc19maWVsZHMiO3M6MToiMCI7fX19fX0='));
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
		AdaptCMS 3.0.2 | News	</title>

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
		<form action="/adaptcms/search" class="navbar-form col-lg-4 pull-left" id="SearchViewForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="894f6fa875f7598f8566a06f525dbd703f01e08c" id="Token319296566"/></div>	<div class="col-lg-8 input-group">
		<input name="data[Search][q]" placeholder="Enter Keyword!..." class="form-control" type="text" id="SearchQ"/>		<span class="input-group-btn">
			<button class="btn" type="submit">Search</button>		</span>
	</div>
	<input type="hidden" name="data[Search][module]" value="1" id="SearchModule"/><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="c644d11c98ab788f6a47383f95d94927a97775fe%3ASearch.module" id="TokenFields940910142"/><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked179617005"/></div></form>		<p class="navbar-text pull-right">
			
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
			<ul class="breadcrumb"><li class="first"><a href="/adaptcms/">Home</a></li><li class="active">News</li></ul>			
			<?php echo $this->Session->flash() ?>
			

			

<h1>News</h1>

			<div class="span8 no-marg-left clearfix">
			<a href="http://localhost/adaptcms/article/1/welcome-to-adaptcms-3-0-2"><h2>Welcome to AdaptCMS 3.0.2!</h2></a>
			<p class="lead">
				@ <em>January 9th, 2014 04:22 AM</em>
			</p>

			<blockquote>
				<p>We hope you enjoy your newly installed copy of AdaptCMS. Be sure to check the <a href="http://www.adaptcms.com" target="_blank">official website</a> for documentation on the CMS and you can get support <a href="http://www.adaptcms.com/support" target="_blank">here</a>. Enjoy!</p>
<p>Thank you,<br />AdaptCMS Team</p>			</blockquote>

			<div id="post-options">
		        <span class="pull-left">
			        <a href="http://localhost/adaptcms/article/1/welcome-to-adaptcms-3-0-2" class="btn btn-primary">Read More</a>
			        <span style="margin-left: 10px">
		                <i class="icon icon-comment"></i>&nbsp;
				        <a href="http://localhost/adaptcms/article/1/welcome-to-adaptcms-3-0-2#comments">0 Comments</a>
		            </span>
		            <span style="margin-left: 10px">
		                <i class="icon-user"></i>&nbsp;
		                Posted by <a href="http://localhost/adaptcms/users/profile/admin">admin</a>
		            </span>
		        </span>
		        <span class="pull-right">
			        		        </span>
			</div>
		</div>
		<hr>
	
	
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