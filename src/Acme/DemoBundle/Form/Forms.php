<?php

namespace Acme\DemoBundle\Form;

use Formz\Builder;

class Forms
{
    protected $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function contact()
    {
        $form = $this->builder->form([
            $this->builder->field('email')->nonEmptyText(),
            $this->builder->field('message')->nonEmptyText(),
        ]);

        return $form;
    }
}
