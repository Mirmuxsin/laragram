<?php

namespace Milly\Laragram\Types;

/**
* Gift
 *
 *<p>*Optional*. The number of remaining gifts of this type that can be sent; for limited gifts only</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#gift
 */
class Gift
{
    /**
    * <p>Unique identifier of the gift</p>
    * @var string
    */
    public string $id;

    /**
    * <p>The sticker that represents the gift</p>
    * @var Sticker
    */
    public Sticker $sticker;

    /**
    * <p>The number of Telegram Stars that must be paid to send the sticker</p>
    * @var int
    */
    public int $star_count;

    /**
    * <p>*Optional*. The number of Telegram Stars that must be paid to upgrade the gift to a unique one</p>
    * @var int|null
    */
    public ?int $upgrade_star_count = null;

    /**
    * <p>*Optional*. The total number of the gifts of this type that can be sent; for limited gifts only</p>
    * @var int|null
    */
    public ?int $total_count = null;

    /**
    * <p>*Optional*. The number of remaining gifts of this type that can be sent; for limited gifts only</p>
    * @var int|null
    */
    public ?int $remaining_count = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->sticker = new Sticker($data['sticker']);

        $this->star_count = $data['star_count'];
        if (isset($data['upgrade_star_count'])){
            $this->upgrade_star_count = $data['upgrade_star_count'];
        }

        if (isset($data['total_count'])){
            $this->total_count = $data['total_count'];
        }

        if (isset($data['remaining_count'])){
            $this->remaining_count = $data['remaining_count'];
        }

    }
}