<?php
class Card {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllCards() {
      $query = "SELECT id, title, content, image_url, extra_images FROM cards";
      $result = $this->db->query($query);
  
      if (!$result) {
          die("Error en la consulta: " . $this->db->error);
      }
  
      $cards = [];
      while ($row = $result->fetch_assoc()) {
          // Dividir las URLs adicionales en un array
          $extraImages = !empty($row['extra_images']) ? explode(',', $row['extra_images']) : [];
  
          // Combinar la imagen principal con las imágenes adicionales
          $cards[] = [
              'id' => $row['id'],
              'title' => $row['title'],
              'content' => $row['content'],
              'images' => array_merge([$row['image_url']], $extraImages) // Combina las imágenes
          ];
      }
  
      return $cards;
  }
  
}
?>
