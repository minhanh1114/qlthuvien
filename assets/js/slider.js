window.addEventListener("load", function(){
    const slider1 =document.querySelector(".slider_1");
    const sliderMain1 =document.querySelector(".slider-main_1");
    const sliderItems1 =document.querySelectorAll(".slider-item-1");
    const nextBtn1 = document.querySelector(".slider-next_1");
    const prevBtn1 = document.querySelector(".slider-prev_1");
    const dotItem1 = document.querySelectorAll(".slider-dot-item");
    const sliderItemWidth1 = sliderItems1[0].offsetWidth;
    const slidesLengtth1 =sliderItems1.length;
    let postionx = 0;
    let index = 0 ;
    nextBtn1.addEventListener("click", function(){
        handleChangeSlide(1);
    });
    prevBtn1.addEventListener("click", function(){
        handleChangeSlide(-1);
    
    });
                function handleChangeSlide(direction)
            {   
                if(direction == 1)
                {
                    index++;
                    if(index > 3)
                    {
                        index = 3;
                        return;
                    }
                    postionx= postionx - sliderItemWidth1*3-100;
                    
                    sliderMain1.style = `transform: translateX(${postionx}px)`;
                    console.log("gia tri:",postionx);
                }
                 if( direction == -1)
                {
                   index--;
                   if(index  < 0)
                   {
                       index=0;
                       return;

                   }
                   postionx= postionx + sliderItemWidth1*3+100;
                   sliderMain1.style = `transform: translateX(${postionx}px)`;

                }
            }
    });
     
    window.addEventListener("load", function(){
        const slider2 =document.querySelector(".slider_2");
        const sliderMain2 =document.querySelector(".slider-main_2");
        const sliderItems2 =document.querySelectorAll(".slider-item-2");
        const nextBtn2 = document.querySelector(".slider-next_2");
        const prevBtn2 = document.querySelector(".slider-prev_2");
        const dotItem2 = document.querySelectorAll(".slider-dot-item");
        const sliderItemWidth2 = sliderItems2[0].offsetWidth;
        const slidesLengtth2 =sliderItems2.length;
        let postionx = 0;
        let index = 0 ;
        nextBtn2.addEventListener("click", function(){
            handleChangeSlide(1);
        });
        prevBtn2.addEventListener("click", function(){
            handleChangeSlide(-1);
        
        });
                    function handleChangeSlide(direction)
                {   
                    if(direction == 1)
                    {
                        index++;
                        if(index > 3)
                        {
                            index = 3;
                            return;
                        }
                        postionx= postionx - sliderItemWidth2*3-100;
                        
                        sliderMain2.style = `transform: translateX(${postionx}px)`;
                        console.log("gia tri:",postionx);
                    }
                     if( direction == -1)
                    {
                       index--;
                       if(index  < 0)
                       {
                           index=0;
                           return;
    
                       }
                       postionx= postionx + sliderItemWidth2*3+100;
                       sliderMain2.style = `transform: translateX(${postionx}px)`;
    
                    }
                }
        });
        window.addEventListener("load", function(){
            const slider2 =document.querySelector(".slider_3");
            const sliderMain2 =document.querySelector(".slider-main_3");
            const sliderItems2 =document.querySelectorAll(".slider-item-3");
            const nextBtn2 = document.querySelector(".slider-next_3");
            const prevBtn2 = document.querySelector(".slider-prev_3");
            const dotItem2 = document.querySelectorAll(".slider-dot-item");
            const sliderItemWidth2 = sliderItems2[0].offsetWidth;
            const slidesLengtth2 =sliderItems2.length;
            let postionx = 0;
            let index = 0 ;
            nextBtn2.addEventListener("click", function(){
                handleChangeSlide(1);
            });
            prevBtn2.addEventListener("click", function(){
                handleChangeSlide(-1);
            
            });
                        function handleChangeSlide(direction)
                    {   
                        if(direction == 1)
                        {
                            index++;
                            if(index > 3)
                            {
                                index = 3;
                                return;
                            }
                            postionx= postionx - sliderItemWidth2*3 -100;
                            
                            sliderMain2.style = `transform: translateX(${postionx}px)`;
                            console.log("gia tri:",postionx);
                        }
                         if( direction == -1)
                        {
                           index--;
                           if(index  < 0)
                           {
                               index=0;
                               return;
        
                           }
                           postionx= postionx + sliderItemWidth2*3+100;
                           sliderMain2.style = `transform: translateX(${postionx}px)`;
        
                        }
                    }
            });
    


    //slider 
    window.addEventListener("load", function(){
        const slider =document.querySelector(".slider");
        const sliderMain =document.querySelector(".slider-main");
        const sliderItems =document.querySelectorAll(".slider-item");
        const nextBtn = document.querySelector(".slider-next");
        const prevBtn = document.querySelector(".slider-prev");
        const dotItem = document.querySelectorAll(".slider-dot-item");
        const sliderItemWidth = sliderItems[0].offsetWidth;
        const slidesLengtth =sliderItems.length;
        let postionx1 = 0;
        let index1 = 0;
        nextBtn.addEventListener("click", function(){
            handleChangeSlide(1);
        });
        prevBtn.addEventListener("click", function(){
            handleChangeSlide(-1);
        
        });
                    function handleChangeSlide(direction)
                {   
                    if(direction == 1)
                    {
                        index1++;
                        if(index1 >= 5 )
                        {
                            index1 = 5;
                            return;
                        }
                        postionx1= postionx1 - sliderItemWidth ;
                        sliderMain.style = `transform: translateX(${postionx1}px) `;
                        console.log(index1);
                        
                    }
                     if( direction == -1)
                    {
                        index1--;
                        if(index1 <= 0)
                        {
                            index1 = 0;
                            return;
                        }
                        postionx1= postionx1 + sliderItemWidth ;
                        sliderMain.style = `transform: translateX(${postionx1}px) `;
                        console.log(index1);
                    }
                }
        });
