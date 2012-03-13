<?php

namespace PHPExiftool\Driver\Tag\Jpeg2000;

class ColorSpecApproximation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'ColorSpecApproximation';

    protected $FullName = 'Jpeg2000::ColorSpec';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Image';

    protected $Type = 'int8s';

    protected $Writable = false;

    protected $Description = 'Color Spec Approximation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Specified',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Accurate',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Exceptional Quality',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Reasonable Quality',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Poor Quality',
        ),
    );

}