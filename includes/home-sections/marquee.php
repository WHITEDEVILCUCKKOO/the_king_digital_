<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .colab_brand_a3e55 {
        width: 100%;
        background: linear-gradient(356deg, #b9c3e726, #535c7429);
        /* margin-top: 5rem; */
    }

    .slider-wrap {
        /* width: 74.5%; */
        /* background: #ffffff; */
        /* border-radius: 20px; */
        /* padding: 28px 0; */
        /* box-shadow: 0 10px 30px rgba(20, 25, 40, 0.08); */
        /* background: rgba(255, 255, 255, .36); */
        /* border: 1px solid rgba(239, 86, 13, .12); */
        background: linear-gradient(356deg, #b9c3e726, #535c7429);
        position: relative;
        overflow: hidden;
        margin: auto;
    }

    /* fade edges */
    .slider-wrap::before,
    .slider-wrap::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 90px;
        z-index: 2;
        pointer-events: none;
    }

    .slider-wrap::before {
        left: 0;
        background: linear-gradient(to right,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .slider-wrap::after {
        right: 0;
        background: linear-gradient(to left,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .track {
        display: flex;
        width: max-content;
        animation: scroll 75s linear infinite;
        padding: 10px 0;
    }

    /* .slider-wrap:hover .track {
          animation-play-state: paused;
      } */

    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .logo-card {
        flex: 0 0 auto;
        width: 100px;
        height: 57px;
        margin: 0 9px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f4f5f7;
        /* padding: 14px; */
        border-radius: 15px;
        overflow: hidden;
    }

    .logo-card img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
</style>


<div class="colab_brand_a3e55">

    <div class="slider-wrap">
        <div class="track" id="track">
            <!-- logos rendered by JS, duplicated for seamless loop -->
        </div>
    </div>
</div>

<script>
    const logos = [
        "assets/images/brand_img/1.png",
        "assets/images/brand_img/2.png",
        "assets/images/brand_img/3.png",
        "assets/images/brand_img/4.png",
        "assets/images/brand_img/5.png",
        "assets/images/brand_img/6.png",
        "assets/images/brand_img/7.png",
        "assets/images/brand_img/8.png",
        "assets/images/brand_img/9.png",
        "assets/images/brand_img/10.png",
        "assets/images/brand_img/11.png",
        "assets/images/brand_img/12.png",
        "assets/images/brand_img/13.png",
        "assets/images/brand_img/14.png",
        "assets/images/brand_img/15.png",
        "assets/images/brand_img/16.png",
        "assets/images/brand_img/17.png",
        "assets/images/brand_img/18.png",
        "assets/images/brand_img/19.png",
        "assets/images/brand_img/20.png",
        "assets/images/brand_img/21.png",
        "assets/images/brand_img/22.png",
        "assets/images/brand_img/23.png",
        "assets/images/brand_img/24.png",
        "assets/images/brand_img/25.png",
        "assets/images/brand_img/26.png",
        "assets/images/brand_img/27.png",
        "assets/images/brand_img/28.png",

    ];

    const track = document.getElementById('track');

    function renderSet() {
        logos.forEach(src => {
            const card = document.createElement('div');
            card.className = 'logo-card';
            const img = document.createElement('img');
            img.src = src;
            img.alt = 'client logo';
            card.appendChild(img);
            track.appendChild(card);
        });
    }

    // duplicate the set so the loop is seamless
    renderSet();
    renderSet();
</script>