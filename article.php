<?php include("layouts/partials/_header.php"); ?>

<div class="article article--category" itemscope itemtype="http://schema.org/NewsArticle" itemtype="http://schema.org/NewsArticle">
    <!--<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>-->
    <!--<meta itemprop="url" content="{{article.url}}">-->
    <!--<meta itemprop="dateModified" content="{{article.updatedAt}}">-->
    <!--<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">-->
        <!--<meta itemprop="name" content="{{article.blog['title']}}"/>-->
        <!--<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">-->
            <!--<meta itemprop="url" content="{{article.blog['media']['thumb']['path']}}"/>-->
            <!--<meta itemprop="width" content="500"/>-->
            <!--<meta itemprop="height" content="500"/>-->
        <!--</div>-->
    <!--</div>-->
    <div class="article__banner">
        <div class="slides">
            <!--{% for media in article.media %}-->
            <div class="slide" itemprop="image" itemscope itemtype="https://schema.org/ImageObject"  data-thumbnail="{{media.path}}" style="background-image: url('https://unsplash.it/1170/470/?random')">
                <!--<meta itemprop="url" content="{{media.path}}">-->
                <!--<meta itemprop="height" content="{{media.height}}">-->
                <!--<meta itemprop="width" content="{{media.width}}">-->
                <!--{% if media.type == 'video' %}-->
                <!--<a href="javascript:void(0)" itemprop="video" class="video-overlay playVideo" data-type="{{media.source}}" data-media="{{media | json_encode}}"  data-videoid="{{media.videoId}}" data-title="{{article.title | raw}}">-->
                    <!--<div class="icons">-->
                        <!--<div class="icon"><i class="fa fa-play"></i></div>-->
                    <!--</div>-->
                <!--</a>-->
                <!--{% endif %}-->
                <!--{% if media.caption | length %}-->
                <!--<div class="slide__content">-->
                    <!--<p class="slide__caption">{{media.caption | raw}}</p>-->
                <!--</div>-->
                <!--{% endif %}-->
            </div>
            <!--{% endfor %}-->
        </div>
    </div>
		<div class="article__category"><span>{{article.category-need proper}}</span></div>
    <div class="article__header">
			<div class="article__caption">
					<!--{% set creatorImage = '' %}-->
					<!--{% if article.createdBy['media'] | length > 0 and article.createdBy['media']['id'] is not empty %}-->
					<!--{% set creatorImage = _Media.getMediaUrl(article.createdBy['media'], 100, 100, {crop:'thumb', radius: 'max', gravity:'face'})%}-->
					<!--{% endif %}-->
					<div class="card__caption">
							<a href="#">
									<div class="card__avatar" style="background-image:url('https://unsplash.it/100/100/?random');">
											<div class="{{userFollowClass}}"></div>
									</div>
									<div class="card__author" >By <span itemprop="author">Amos Whitewolf</span></div>
							</a>
							<div class="card__date" itemprop="datePublished">15 June 1016</div>
							<div class="card__read-time">5 mins</div>
					</div>
			</div>
			<!--{{this.render('partials/article/_social_sharing.twig', {article: article}) | raw }}-->

        <!--{% if _User.isGuest() %}-->
        <a href="javascript:void(0)" class="article__follow forceLoginModal">Follow +</a>
        <!--{% else %}-->
        <!--<a href="javascript:void(0)" class="article__follow followArticleBtn" data-guid="{{article.blog['guid']}}" data-status="{{status}}">{{text}}</a>-->
        <!--{% endif%}-->
        <h1 class="article__heading" itemprop="headline">{{article.title | capitalize}}</h1>
    </div>
    <div class="container">
        <div class="article-content-section">
            <div class="content-area" itemprop="articleBody">
                {{article.content | raw}}
            </div>
        </div>
    </div>
    <!--{% set network = _Network.getNetworkData() %}-->
    <!--{% if network.thirdPartyIntegrations['disqus'] | length > 0 and network.thirdPartyIntegrations['disqus']['shortName'] != '' %}-->
    <!--{{this.render("partials/article/_disqus_comments.twig", {disqus: network.thirdPartyIntegrations['disqus'], userId: article.userId, url:article.url, articleId: article.id}) | raw}}-->
    <!--{% endif %}-->
</div>
<!--{{this.render("partials/article/_popular_articles.twig", {articleId: article.id}) | raw }}-->

<?php include("layouts/partials/_footer.php"); ?>
