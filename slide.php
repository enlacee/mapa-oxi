<div id="shadow" style="display:none"></div>
<div id="slide" style="display:none">
    <div style="width: 100vw; position: fixed; top:0; top:25%">
        <div class="marco-black">
            <div class="item">
                <ul id="content-slider" class="content-slider">
                    <li>
                        <a href="#"><img src="public/image/slide/02.jpg" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="public/image/slide/01.jpg" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="public/image/slide/02.jpg" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="public/image/slide/01.jpg" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="public/image/slide/02.jpg" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="public/image/slide/01.jpg" /></a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="pull-left">
                    <h4 class="slide_counter" style="margin:0 0 10px 0;"><span id="current">1</span> of <span id="total"></span></h4>
                </div>
                <div class="pull-right" style="margin-right:2vh;">
                    <img src="public/image/slide/lupa.png" />
                </div>
            </div>
        </div>
    </div>
</div>

<div id="shadow_modalTop" style="display:none">

</div>
<div id="modalTop" style="display:none">
    <div class="row">
        <img src="public/image/slide/01.jpg" width="500px" class="img-responsive" />
    </div>
    <div class="row">
        <div class="pull-right">
            <a class="link-sky sky-descargar" href="#" target="_blank">Descargar</a>
        </div>
    </div>

</div>

    <style>
        #slide {
            position: relative;

            z-index:2;
        }
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
            z-index:2;
        }
		.content-slider li{
		    background-color: transparent;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
        .content-slider li a img {
            border:3px solid #AAC8D8;
        }
		.demo{
			width: 800px;
		}

/**/
    .marco-black {
        background-color:rgba(0,0,0,0.8);
        padding:70px;
    }
    .slide_counter{
        color:#AAC8D8;
        font-family: 'BreePeru-Regular';
    }
    #modalTop{
        position: fixed;
        top: 41vh;
        left: 50vw;
        margin-top: -100px;
        margin-left: -250px;
        background-color: transparent;
        z-index: 4;
    }
    #modalTop img {
        border: 3px solid #AAC8D8;
    }
    #shadow_modalTop {
        position: fixed;
        top: 0vh;
        left: 0vw;
        width: 100vw;
        height: 100vh;
        background-color: black;
        opacity: 0.8;

        z-index:3;
}
    .sky-descargar {
        font-size:20px;
        font-family: 'BreePeru-Light';
    }
    </style>
