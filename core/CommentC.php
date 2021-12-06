<?php 
	include_once "../config.php";

	class CommentC {
		function getComments() {
			$sql = "SELECT * FROM comment ORDER BY createdDate ASC ";
			$db = config::getConnexion();
			try {
				return $db->query($sql);
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}

		function insertComment($comment) {
			$sql = "INSERT INTO comment (content, publisher, createdDate) VALUES (:content, :publisher, :createdDate)";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':content',$comment->getContent());
				$req->bindValue(':publisher',$comment->getPublisher());
				$req->bindValue(':createdDate',$comment->getCreatedDate());
				$req->execute();
				return $db->lastInsertId();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function deleteComment($__id) {
			$sql = "DELETE FROM comment WHERE idComment = :id";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':id',$__id);
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function adminDeleteComment($__id) {
			$sql = "UPDATE comment SET content = :content, publisher = :publisher WHERE idComment = :id ";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':content', "deleted");
				$req->bindValue(':publisher', "deleted");
				$req->bindValue(':id',$__id);
				$req->execute();
				return $db->lastInsertId();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function getCountComment() {
			$sql = "SELECT count(*) AS count FROM comment";
			$db = config::getConnexion();
			try {
				$req = $db->query($sql);
				$req->execute();
				return $req->fetchAll();
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}

		function getCountPublisher() {
			$sql = "SELECT count(DISTINCT publisher) AS count FROM comment";
			$db = config::getConnexion();
			try {
				return $db->query($sql);
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}

		function getCountDeleted() {
			$sql = "SELECT count(*) AS count FROM comment WHERE publisher = 'deleted' AND content = 'deleted'";
			$db = config::getConnexion();
			try {
				$req = $db->query($sql);
				$req->execute();
				return $req->fetchAll();
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}


		function searchComment($__input) {
			$sql = "SELECT * FROM comment WHERE publisher LIKE :publisher OR content LIKE :content OR createdDate LIKE :createdDate";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':content', "%". $__input ."%");
				$req->bindValue(':publisher', "%". $__input ."%");
				$req->bindValue(':createdDate', "%". $__input ."%");
				$req->execute();
				return $req->fetchAll();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function countMonths($__input) {
			$sql = "SELECT COUNT(*) FROM comment WHERE MONTH(createdDate) = $__input";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->execute();
				return $req->fetch();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function countPMonths($__input) {
			$sql = "SELECT COUNT(DISTINCT publisher) FROM comment  WHERE MONTH(createdDate) = $__input";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->execute();
				return $req->fetch();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}
	}

 ?>