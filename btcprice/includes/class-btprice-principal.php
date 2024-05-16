<?php
class Principal{

  static public function Install(){}
    
  static public function Uninstall(){}

  static public function get_pricebtc() {
      // URL de la API (puedes usar una API pública como CoinGecko)
      $api_url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd';
      
      // Realizar la solicitud HTTP
      $response = wp_remote_get($api_url);
      // Verificar si la solicitud fue exitosa
      if (is_wp_error($response)) {
          return 'Error al obtener el precio de Bitcoin';
      }
      // Obtener los datos de la respuesta
      $body = wp_remote_retrieve_body($response);
      $data = json_decode($body, true);
      
      // Verificar que los datos sean correctos
      if (isset($data['bitcoin']['usd'])) {
          $precio_bitcoin = $data['bitcoin']['usd'];
          return '<b>Bitcoin</b> BTC $' . number_format($precio_bitcoin, 2);
      } else {
          return 'Error al obtener el precio de Bitcoin';
      }
  }
}
?>