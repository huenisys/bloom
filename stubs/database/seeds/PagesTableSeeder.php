<?php

use Illuminate\Database\Seeder;

use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sample_content = <<<SAMPLE
        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p><p>And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
SAMPLE;

        factory(Page::class)->create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => $sample_content,
        ]);

        factory(Page::class)->create([
            'title' => 'Terms and Conditions',
            'slug' => 'terms',
            'content' => $sample_content,
        ]);

        factory(Page::class)->create([
            'title' => 'Privacy Policy',
            'slug' => 'privacy',
            'content' => $sample_content,
        ]);

        factory(Page::class)->create([
            'title' => 'What\'s New?',
            'slug' => 'news',
            'content' => '<ul><li>Added auth</li><li>Enabled backups</li><li>Enabled GZip</li><li>Added Nginx proxy caching</li></ul>',
        ]);

    }
}
