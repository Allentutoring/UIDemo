<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UIBehaviors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private int $id = 1;

    public function run()
    {
        $this->store('text', 'Start Bootstrap');
        $this->store('text', 'Portfolio');
        $this->store('text', 'About');
        $this->store('text', 'Contact');
        $this->store('text', 'Start Bootstrap');
        $this->store('text', 'Graphic Artist - Web Designer - Illustrator');
        $this->store('src', 'assets/img/portfolio/cabin.png');
        $this->store('src', 'assets/img/portfolio/cake.png');
        $this->store('src', 'assets/img/portfolio/circus.png');
        $this->store('src', 'assets/img/portfolio/game.png');
        $this->store('src', 'assets/img/portfolio/safe.png');
        $this->store('src', 'assets/img/portfolio/submarine.png');

        $this->store('text', '부트스트랩 시작');
        $this->store('text', '포트폴리오');
        $this->store('text', '대하여');
        $this->store('text', '연락처');
        $this->store('text', '부트스트랩 시작');
        $this->store('text', '그래픽 아티스트 - 웹 디자이너 - 일러스트레이터');
        $this->store('src', 'https://thumb.mt.co.kr/06/2020/09/2020091115075836165_1.jpg/dims/optimize/');
        $this->store('src', 'https://w.namu.la/s/926f1e3bd4909b962fc000cd8fac426a6e6442541d734dc3c618f56afb148e0a99bd93d01cbd56da8c80204c7ddb09b6fd8629e3b5a7b09969b4ae81c32a688ca3b04fd0bf429ff820ee016aa5effc11c781e489013736ed2919b4f48ade5c095951854606f5d2901e5def2cbff08691');
        $this->store('src', 'https://newsimg.sedaily.com/2018/07/13/1S22HXRTDR_1.jpg');
        $this->store('src', 'https://post-phinf.pstatic.net/MjAyMDA2MDdfMTI2/MDAxNTkxNTM1Njc2NTMy.p234e8TwkZFZZbDaR21l1fA9IK08yT_tch1frZRYnl8g.hRg0TDaKGN5pTFI2AsjJbrhFsifWNp96Otbs_09BV8Ig.JPEG/26.jpg?type=w1200');
        $this->store('src', 'http://img4.tmon.kr/cdn3/deals/2020/08/21/3155974946/3155974946_front_1f17f5fa19.jpg');
        $this->store('src', 'https://mblogthumb-phinf.pstatic.net/MjAyMDA5MTJfMTE4/MDAxNTk5ODQ3ODU4NTY0.OTvAV_NpxTFY7uGJEkus0yRP57hkl-xhE97aZ0cfG74g.U8rqwM2mQYWN01u7PC-0AMN6O78RRBvHxF429tUCnG8g.JPEG.rgm84d/%EC%9E%A5%EB%B3%B4%EA%B3%A0-3.jpg?type=w800');
    }

    private function store($attribute, $value)
    {
        \App\Models\UIBehaviors::create([
            'ui_condition_group_id' => $this->id,
            'attribute' => $attribute,
            'value' => $value,
        ]);
        $this->id++;
    }
}
