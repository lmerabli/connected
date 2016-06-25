<?php 

	namespace Co\UserBundle\Service;

	use Co\UserBundle\Entity\User;
	use Doctrine\ORM\EntityManager;
	use Doctrine\ORM\Repository\RepositoryFactory;


	class UserService {


		/* @var EntityManager $em */
	    protected $em;
	    
	    /* @var RepositoryFactory  $userRepository*/
	    protected $userRepository;

	    /**
	     * @param EntityManager $entityManager
	     */
	    public function __construct(EntityManager $entityManager){
	        $this->em = $entityManager;
	        $this->userRepository = $this->em->getRepository('UserBundle:User');
	    }

	    /**
	     * Remove an User from database
	     * @param User $user
	     */
	    public function remove(User $user){
	        $this->em->remove($user);
	        $this->em->flush();
	    }


	    /**
	     * Save an User in database
	     * @param User $user
	     */
	    public function save(User $user){
	        $this->em->persist($user);
	        $this->em->flush();
	    }


	    /**
	     * Return all Users
	     * @return array
	     */
	    function getUsers(){
	        return $this->userRepository->findAll();
	    }

	    /**
	    * Search for a User through nom_cli
	    * Return an array of User
	    * @param String $term
	    * @return array
	    */
	    function searchUserByUsername($term){
	        return $this->userRepository->createQueryBuilder('u')
	            ->where('u.nom_cli LIKE :term')
	            ->setParameter('term', '%'.$term.'%')
	            ->getQuery()
	            ->getResult();
	    }


	    /**
	    * Search for a User through id_cli
	    * Return an array of User
	    * @param int $id
	    * @return array
	    */
	    function searchUserByUserId($id){
	        return $this->userRepository->createQueryBuilder('u')
	            ->where('u.id_cli = :id')
	            ->setParameter('id', '%'.$id.'%')
	            ->getQuery()
	            ->getResult();
	    }





	}



?>