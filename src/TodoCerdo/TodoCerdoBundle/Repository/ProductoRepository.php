<?php
namespace TodoCerdo\TodoCerdoBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProductoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductoRepository extends EntityRepository
{
    public function findAllOrderByName()
    {
        return $this->getEntityManager()
                ->createQuery('SELECT p FROM TodoCerdoTodoCerdoBundle:Producto p ORDER BY p.nombre ASC')
                ->getResult();
    }
    

    
    
}
?>