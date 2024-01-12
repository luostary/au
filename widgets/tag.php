<?php

namespace app\widgets;

class tag extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- Tag -->
            <div id="tag_cloud-2" class="widget widget_tag_cloud">
                <div class="caption"><h4>Tags</h4></div>
                <div class="tagcloud"><a href="https://demo2.smthemes.com/?tag=audio" class="tag-link-70"
                                         title="1 topic" style="font-size: 8pt;">audio</a>
                    <a href="https://demo2.smthemes.com/?tag=content-2" class="tag-link-79" title="1 topic"
                       style="font-size: 8pt;">content</a>
                    <a href="https://demo2.smthemes.com/?tag=embeds-2" class="tag-link-87" title="2 topics"
                       style="font-size: 13.25pt;">embeds</a>
                    <a href="https://demo2.smthemes.com/?tag=gallery" class="tag-link-99" title="1 topic"
                       style="font-size: 8pt;">gallery</a>
                    <a href="https://demo2.smthemes.com/?tag=jetpack-2" class="tag-link-109" title="1 topic"
                       style="font-size: 8pt;">jetpack</a>
                    <a href="https://demo2.smthemes.com/?tag=media" class="tag-link-117" title="1 topic"
                       style="font-size: 8pt;">media</a>
                    <a href="https://demo2.smthemes.com/?tag=post-formats" class="tag-link-134" title="5 topics"
                       style="font-size: 22pt;">Post Formats</a>
                    <a href="https://demo2.smthemes.com/?tag=quote" class="tag-link-140" title="1 topic"
                       style="font-size: 8pt;">quote</a>
                    <a href="https://demo2.smthemes.com/?tag=shortcode" class="tag-link-146" title="2 topics"
                       style="font-size: 13.25pt;">shortcode</a>
                    <a href="https://demo2.smthemes.com/?tag=tiled" class="tag-link-164" title="1 topic"
                       style="font-size: 8pt;">tiled</a>
                    <a href="https://demo2.smthemes.com/?tag=twitter-2" class="tag-link-167" title="1 topic"
                       style="font-size: 8pt;">twitter</a>
                    <a href="https://demo2.smthemes.com/?tag=video" class="tag-link-170" title="1 topic"
                       style="font-size: 8pt;">video</a>
                    <a href="https://demo2.smthemes.com/?tag=wordpress-tv" class="tag-link-174" title="1 topic"
                       style="font-size: 8pt;">wordpress.tv</a></div>
            </div>
            <!-- / Tag -->
        ';
    }
}
