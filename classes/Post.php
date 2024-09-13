<?php
class Post {
    public $title;
    public $content;
    public $images = []; // Agora armazena múltiplas imagens
    public $ratings = [];
    public $comments = [];

    public function __construct($title, $content, $images) {
        $this->title = $title;
        $this->content = $content;
        $this->images = $images; // Armazena todas as imagens
    }

    public function addRating($rating) {
        $this->ratings[] = $rating;
    }

    public function addComment(Comment $comment) {
        $this->comments[] = $comment;
    }

    public function getAverageRating() {
        if (count($this->ratings) > 0) {
            return array_sum($this->ratings) / count($this->ratings);
        }
        return 0;
    }
}
?>
