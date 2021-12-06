<?php 
	class Comment {
		private $idComment;
		private $content;
		private $publisher;
		private $createdDate;

		function __construct($___0, $___1, $___2, $___3) {
			$this->idComment = $___0;
			$this->publisher = $___1;
			$this->content = $___2;
			$this->createdDate = $___3;
		}

		function getIdComment() {
			return $this->idComment;
		}

		function setIdComment($idComment) {
			$this->idComment = $idComment;
		}

		function getContent() {
			return $this->content;
		}

		function setContent($content) {
			$this->content = $content;
		}

		function getPublisher() {
			return $this->publisher;
		}

		function setPublisher($publisher) {
			$this->publisher = $publisher;
		}

		function getCreatedDate() {
			return $this->createdDate;
		}

		function setCreatedDate($createdDate) {
			$this->createdDate = $createdDate;
		}
	}

 ?>