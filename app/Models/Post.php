<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Events\TitleUpdatedEvent;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Config;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\Relations\BelongsTo;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Attributes\Watch;
use WendellAdriel\Lift\Lift;

#[BelongsTo(User::class)]
class Post extends Model
{
    use Lift;

    #[Watch(TitleUpdatedEvent::class)]
    #[Fillable]
    #[Rules(['required','string','max:60'],['validation.title'])]
    public string $title;

    #[Fillable]
    #[Rules(['required','string','max:1000'],['validation.description'])]
    public string $description;

    #[Fillable]
    #[Config(fillable: true, cast: 'boolean' )]
    public bool $is_title_updated;

    #[Fillable]
    #[Cast('int')]
    public int $user_id;

    #[Fillable]
    #[Cast('datetime')]
    public Carbon $published_at;
}
