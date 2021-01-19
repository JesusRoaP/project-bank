<?php
function bp_menu_administrador() {
    $icon = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4yLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjIwcHgiIGhlaWdodD0iMjBweCIgdmlld0JveD0iMCAwIDIwIDIwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyMCAyMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCgkuc3Qwe2ZpbGw6I0EwQTVBQTt9DQo8L3N0eWxlPg0KPGc+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTkuMywyLjFDNy44LDEsNiwxLjIsNC44LDJDNCwyLjUsMy41LDMuNCwzLjUsNC4zbDAsMGwwLDB2MC4xYy0xLjIsMC0yLDAuNy0yLjUsMS40QzAuNiw2LjcsMC41LDcuNiwwLjksOC4yDQoJCUMwLjQsOC42LDAsOS4zLDAsMTAuMnMwLjMsMS43LDAuOCwyLjJjLTAuNCwwLjktMC4zLDEuOSwwLjIsMi43YzAuNiwwLjcsMS40LDEsMi40LDAuOWMwLDAuMSwwLDAuMSwwLjEsMC4yaDAuMQ0KCQljMC4zLDEsMC45LDEuNywxLjksMi4xYzAuNSwwLjIsMSwwLjMsMS41LDAuM2MwLjcsMCwxLjMtMC4yLDEuNy0wLjVzMC42LTAuOCwwLjYtMS40VjIuMUw5LjMsMi4xeiBNOC41LDE3LjcNCgkJYy0wLjYsMC41LTEuOCwwLjUtMi43LDAuMUM1LjIsMTcuNiw0LjIsMTcsNCwxNS42di0wLjNsMCwwYzAuMS0wLjMsMC40LTAuNSwwLjgtMC44YzAuOC0wLjUsMS44LTEuMywwLjctMy4zTDUsMTEuNQ0KCQljMC45LDEuNiwwLjIsMi4xLTAuNiwyLjZjLTAuNSwwLjMtMSwwLjctMSwxLjNjLTAuOCwwLjEtMS41LTAuMS0xLjktMC43QzEsMTQuMiwxLDEzLjMsMS40LDEyLjZsMCwwYzAuMi0wLjMsMC42LTAuNCwxLjItMC40DQoJCWMwLjMsMCwwLjYsMC4yLDAuOCwwLjNjMC4xLDAuMSwwLjIsMC4xLDAuMywwLjFsMC4xLTAuNWMwLDAtMC4xLTAuMS0wLjItMC4xYy0wLjMtMC4xLTAuNi0wLjMtMS0wLjNjLTAuNiwwLTEuMSwwLjEtMS40LDAuMw0KCQljLTAuNC0wLjQtMC43LTEuMS0wLjctMS44YzAtMC44LDAuNC0xLjQsMC45LTEuN2wwLjMtMC4yTDEuNSw4LjFjLTAuNC0wLjQtMC40LTEuMywwLTJDMS43LDUuOCwyLjQsNC43LDMuOCw1DQoJCWMwLjEsMC4zLDAuMywwLjUsMC42LDAuOGMwLDAuNC0wLjYsMS0xLDEuMmwwLjIsMC41YzAuNC0wLjIsMS0wLjcsMS4zLTEuM0M1LjIsNi40LDUuNiw2LjYsNiw2LjZWNi4xQzUsNS45LDQuMiw1LjIsNCw0LjMNCgkJYzAtMC43LDAuNC0xLjQsMS4xLTEuOEM2LDEuOSw3LjYsMS43LDguOCwyLjZ2MkM4LjYsNC45LDcuOCw1LDcuMSw0LjdjLTAuMi0wLjEtMS0wLjUtMC45LTEuMkw1LjcsMy40QzUuNiw0LjIsNiw0LjksNi45LDUuMg0KCQljMC4zLDAuMSwwLjcsMC4yLDEsMC4yYzAuMywwLDAuNy0wLjEsMC45LTAuMnYzLjFDOC42LDguMiw4LjIsOC4xLDgsOEM2LjksNy44LDYuMSw4LjIsNS42LDkuM2MtMC4zLDAuNi0wLjYsMS4xLTEuMSwxDQoJCUM0LjIsMTAuMiw0LDkuOSwzLjksOS42QzMuNyw5LjQsMy42LDkuMSwzLjQsOC45bDAuMS0wLjFjMC4xLTAuMywwLTAuNi0wLjItMC45TDIuOSw4LjNDMyw4LjQsMyw4LjUsMi45LDguNg0KCQljMCwwLjEtMC4yLDAuMi0wLjMsMC4zYzAsMC0wLjEsMC0wLjItMC4xTDIuMSw5LjFjMC4yLDAuMiwwLjQsMC4zLDAuNiwwLjNoMC4xYzAuMSwwLDAuMSwwLDAuMi0wLjFjMC4yLDAuMSwwLjMsMC4zLDAuNCwwLjUNCgkJYzAuMiwwLjMsMC40LDAuNywwLjksMC45YzAuMSwwLDAuMiwwLDAuMywwYzAuNywwLDEuMS0wLjgsMS40LTEuM2MwLjQtMC44LDEtMS4xLDEuOC0wLjljMC4zLDAsMC44LDAuMiwxLDAuM3YyLjkNCgkJYy0wLjItMC4xLTAuNC0wLjEtMC43LDBDNy41LDExLjgsNywxMi40LDYuOCwxM2MtMC4yLDAuNSwwLDEsMC4xLDEuNHMwLjIsMC43LDAuMSwxLjFjMCwwLjQtMC4zLDAuNS0wLjcsMC40bC0wLjEsMC41DQoJCWMwLjEsMCwwLjIsMCwwLjMsMGMwLjUsMCwxLTAuMywxLjItMC45YzAuMi0wLjUsMC0xLTAuMS0xLjRTNy40LDEzLjQsNy41LDEzczAuNS0wLjgsMC45LTAuOWMwLjIsMCwwLjQsMCwwLjUsMC4xdjQuNGwwLDANCgkJQzguOSwxNy4xLDguOCwxNy40LDguNSwxNy43eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xOS45LDExLjZMMjAsOC44aC0xLjVjLTAuMS0wLjMtMC4yLTAuNy0wLjMtMUwxOS42LDdsLTEuNC0yLjVsLTEuNCwwLjhjLTAuMi0wLjItMC41LTAuNS0wLjctMC43bDAuOC0xLjQNCgkJbC0yLjUtMS41bC0wLjksMS41QzEzLjMsMy4xLDEzLDMsMTIuNywyLjlWMS4ySDExdjE3LjRoMS43di0xLjFjMC4zLTAuMSwwLjYtMC4xLDAuOS0wLjJsMC41LDFsMi41LTEuM2wtMC41LTENCgkJYzAuMy0wLjIsMC41LTAuNSwwLjgtMC43bDEsMC42bDEuNS0yLjRsLTEuMS0wLjdjMC4xLTAuNCwwLjItMC43LDAuMy0xLjFMMTkuOSwxMS42eiBNMTEuNSw2LjdjMS42LDAuMSwyLjksMS41LDIuOSwzLjINCgkJcy0xLjMsMy4xLTIuOSwzLjJWNi43eiBNMTEuNSwxMy42YzEuOS0wLjEsMy41LTEuOCwzLjUtMy43YzAtMi0xLjUtMy42LTMuNS0zLjdWNS4xYzIuNSwwLjEsNC42LDIuMyw0LjYsNC44YzAsMi42LTIsNC43LTQuNiw0LjgNCgkJVjEzLjZ6IE0xOC42LDEzLjVsLTEsMS41bC0wLjktMC42bC0wLjEsMC4yYy0wLjMsMC40LTAuNiwwLjctMSwxbC0wLjIsMC4xbDAuNSwwLjlsLTEuNiwwLjhsLTAuNS0wLjlsLTAuMiwwLjENCgkJYy0wLjQsMC4xLTAuOCwwLjItMS4yLDAuM2gtMC4ydjFoLTAuNnYtMi44YzIuOC0wLjEsNS4xLTIuNSw1LjEtNS4zYzAtMi45LTIuMy01LjItNS4xLTUuM1YxLjdoMC42djEuNmgwLjINCgkJYzAuNCwwLjEsMC44LDAuMiwxLjIsMC4zbDAuMiwwLjFsMC44LTEuNGwxLjUsMC45bC0wLjgsMS40bDAuMiwwLjFjMC4zLDAuMywwLjcsMC42LDAuOSwwLjlsMC4xLDAuMkwxOCw1LjJsMC45LDEuNmwtMS4zLDAuNw0KCQlsMC4xLDAuMkMxNy44LDguMSwxOCw4LjUsMTguMSw5djAuMmgxLjRMMTkuNCwxMWgtMS4zdjAuMmMtMC4xLDAuNS0wLjIsMS0wLjQsMS40bC0wLjEsMC4yTDE4LjYsMTMuNXoiLz4NCjwvZz4NCjwvc3ZnPg0K';

    add_menu_page(BP_NOMBRE, BP_NOMBRE, 'manage_options', 'project-bank', 'project_bank_home', $icon);
}
add_action( 'admin_menu', 'bp_menu_administrador' );

function project_bank_home() {
    wp_enqueue_style( 'admin-backend-css' );
    wp_enqueue_style( 'datatables-pb-css' );
	wp_enqueue_style( 'iconos-css' );
	wp_enqueue_style( 'admin-frontend-css' );

    include BP_RUTA . 'admin/configuration.php';
}
?>