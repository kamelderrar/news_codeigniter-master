<div class="container">
     <div id="blog" class="row"> 
                
                  <div class="col-sm-2 col-lg-2 paddingTop20">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> News</a></li>
                    <li><a href="/news">Latest news</a></li>
                    <li><a href="/news">Updates</a></li>
                    <li><a href="/news">Training</a></li>
                    <li><a href="/news">Nutrition</a></li>
                    <li><a href="/news">Proteins</a></li>
                    <li><a href="/news">Recipes</a></li>
                    <li><a href="/news">Challenge</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="/news"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                </ul>
            </nav>
                    
        </div>
                <?php foreach ($news as $news_item): ?>
                    <div class="col-md-10 col-lg-10 blogShort">
                     <?php echo $news_item['title'] ?>
                     <img src="/assets/img/blog.jpg" alt="post img" class="pull-left " style="width:150px;height:110px; margin: 10px">
                     
                     <article>
                        <p>
                        <?php  
                        $strCut = explode(".", $news_item['text']);  
                        echo $strCut[0]; 
                        ?>    
                        </p>
                     </article>
                    <a class="btn btn-blog pull-right marginBottom10" href="/news/view/<?php echo $news_item['id'] ?>">View article</a> 
                 </div>
                 <?php endforeach ?>
               <div class="col-md-12 gap10"></div>
             </div>
</div>



