
<div class="wrap">
    <?php
     echo "<h1 class='wp_heading_inline'>".get_admin_page_title()."</h1>";
     ?>
     <br>
   
     <table class="wp-list-table widefat fixed striped pages">
          <thead>
            <th>Crypto moneda</th>
            <th>Shortcode</th>
            <th>Acciones</th>
          </thead>
          <tbody id='the_list'>
               <tr>
                <td>Bitcoin</td>
                <td id="btcprice">[BTCPRICE]</td>
                <td><a id="btncopiar" href='' class='page-title-action'>Copiar</a></td>
             </tr>
          </tbody>
     </table>
</div>
