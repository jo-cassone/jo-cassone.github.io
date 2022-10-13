<?php
// Filtro para agregar contenido a una página de WordPress
add_filter('the_content', 'clase_add_custom_content');

// Agregamos contenido sólo a la página con el título "API CAfé"
function clase_add_custom_content($content){

	if ( ! is_page('API Café') ) return $content;

	$html = get_data_api();
	return $content.$html;
}

// Función que se encarga de recuperar los datos de la API externa
function get_data_api(){
	$url = 'https://api.sampleapis.com/coffee/iced';
	$response = wp_remote_get($url);

	if (is_wp_error($response)) {
		error_log("Error: ". $response->get_error_message());
		return false;
	}

	$body = wp_remote_retrieve_body($response);

	$data = json_decode($body);

	$template = '<table class="table table-data">
					<tr>
						<th></th>
						<th>Título</th>
						<th>Ingredientes</th>
						<th>Descripción</th>
						<th>Botones</th>
					</tr>
					{data}
				</table>';
	
	if ( $data ){
		$str = '';
		foreach ($data as $coffee) {
			$str .= "<tr>";
			$str .= "<td class='tableimage'><img src='{$coffee->image}' width='60'/></td>";
			$str .= "<td class='tabletitle'>{$coffee->title}</td>";
			//Multiple Array -> Ingredients
			$str .= "<td class='tabledescript1'>{$coffee->ingredients[0]} {$coffee->ingredients[1]} {$coffee->ingredients[2]} {$coffee->ingredients[3]}</td>";
			$str .= "<td class='tabledescript2'>{$coffee->description}</td>";
			$str .= "<td><button type='button' class='btn btn-outline-primary boton-info' data-bs-toggle='modal' data-bs-target='#modalTabla'><i class='fa-solid fa-circle-info'></i></button></td>";
			$str .= "</tr>";
		}
	}
	$html = str_replace('{data}', $str, $template);

	return $html;
}