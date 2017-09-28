<?php

namespace EpiDev\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EpiDevAdminBundle extends Bundle
{
  public function getParent()
  {
    return 'AppBundle';
  }
}
