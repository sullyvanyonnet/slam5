<?php

namespace stpaul\Domain;

class Sejour
{
    private  $SEJNO;
    private  $SEJINTITULE;
    private  $SEJMONTANTMBI;
    private  $SEJDTEDEB;
    private  $SEJDUREE;

    function __construct($SEJNO, $SEJINTITULE, $SEJMONTANTMBI, $SEJDTEDEB, $SEJDUREE)
    {
        $this->SEJNO = $SEJNO;
        $this->SEJINTITULE = $SEJINTITULE;
        $this->SEJMONTANTMBI = $SEJMONTANTMBI;
        $this->SEJDTEDEB = $SEJDTEDEB;
        $this->SEJDUREE = $SEJDUREE;
    }

    /**
     * @return mixed
     */
    public function getSEJNO()
    {
        return $this->SEJNO;
    }

    /**
     * @return mixed
     */
    public function getSEJINTITULE()
    {
        return $this->SEJINTITULE;
    }

    /**
     * @return mixed
     */
    public function getSEJMONTANTMBI()
    {
        return $this->SEJMONTANTMBI;
    }

    /**
     * @return mixed
     */
    public function getSEJDTEDEB()
    {
        return $this->SEJDTEDEB;
    }

    /**
     * @return mixed
     */
    public function getSEJDUREE()
    {
        return $this->SEJDUREE;
    }

    /**
     * @param mixed $SEJNO
     */
    public function setSEJNO($SEJNO)
    {
        $this->SEJNO = $SEJNO;
    }

    /**
     * @param mixed $SEJINTITULE
     */
    public function setSEJINTITULE($SEJINTITULE)
    {
        $this->SEJINTITULE = $SEJINTITULE;
    }

    /**
     * @param mixed $SEJMONTANTMBI
     */
    public function setSEJMONTANTMBI($SEJMONTANTMBI)
    {
        $this->SEJMONTANTMBI = $SEJMONTANTMBI;
    }

    /**
     * @param mixed $SEJDTEDEB
     */
    public function setSEJDTEDEB($SEJDTEDEB)
    {
        $this->SEJDTEDEB = $SEJDTEDEB;
    }

    /**
     * @param mixed $SEJDUREE
     */
    public function setSEJDUREE($SEJDUREE)
    {
        $this->SEJDUREE = $SEJDUREE;
    }


}
