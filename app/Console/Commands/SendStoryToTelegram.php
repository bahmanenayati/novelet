<?php

namespace App\Console\Commands;

use App\Models\Story;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Soundasleep\Html2TextException;
use Telegram\Bot\Exceptions\TelegramSDKException;

class SendStoryToTelegram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'story:telegram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws TelegramSDKException
     * @throws Html2TextException
     */
    public function handle()
    {
        $telegram = new \Telegram\Bot\Api('1134268178:AAEh0QYNxjlVirx9QXQOhoVakjMh67i1OFk');

        $story = Story::query()->where('lang', 'fa')->inRandomOrder()->first();
        $article = Str::limit(\Soundasleep\Html2Text::convert($story->article), 250);

        $telegram->sendMessage([
            'chat_id' => '@novelet_fa',
            'parse_mode' => "HTML",
            'text' => "<b>هرشب ساعت ۲۲ یک داستان کوتاه</b>\n{$article}
<a href='https://novelet.ir/story/{$story->id}'><b>نمایش کامل داستان</b></a>
#در_خانه_بمانیم
#داستان_بخوانیم
@novelet_fa\n"
        ]);
    }
}
