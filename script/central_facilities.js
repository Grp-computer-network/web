let slidercontainer=document.getElementById('slidercontainer');
        let slider=document.getElementById('slider');
        let cards=slider.getElementsByTagName('li');
        
        let elementsToshow=3;
        if(document.body.clientWidth<1000){
            elementsToshow=1;
        }
        else if(document.body.clientWidth<1000){
            elementsToshow=2;
        }
        let slidercontainerwidth =slidercontainer.clientWidth;
        let cardwidth=slidercontainerwidth/elementsToshow;

        slider.style.width=cards.length*cardwidth+'px';
        slider.style.transition='margin';
        slider.style.transitionDuration='1s';

        for(let index=0; index<cards.length; index++){
            const element=cards[index];
            element.style.width=cardwidth+'px';
        }

        function previous() {
            let marginLeft = parseFloat(slider.style.marginLeft) || 0;
            if (marginLeft < 0) { // Ensure it doesn't exceed the leftmost limit
                slider.style.marginLeft = (marginLeft + cardwidth) + 'px'; // Move right
            }
        }
        
        
        
        function nextcard() {
            let marginLeft = parseFloat(slider.style.marginLeft) || 0;
            let maxMargin = -cardwidth * (cards.length - elementsToshow); // Calculate max scroll limit
            if (marginLeft > maxMargin) {
                slider.style.marginLeft = (marginLeft - cardwidth) + 'px'; // Move left
            }
        }
        


        let slidercontainer1=document.getElementById('slidercontainer1');
        let slider1=document.getElementById('slider1');
        let cards1=slider1.getElementsByTagName('li');
        
        let elementsToshow1=3;
        let slidercontainerwidth1 =slidercontainer1.clientWidth;
        let cardwidth1=slidercontainerwidth1/elementsToshow1;

        slider1.style.width=cards1.length*cardwidth1+'px';
        slider1.style.transition='margin';
        slider1.style.transitionDuration='1s';

        for(let index=0; index<cards1.length; index++){
            const element=cards1[index];
            element.style.width=cardwidth1+'px';
        }

    
        
        function prev() {
            let marginLeft = parseFloat(slider1.style.marginLeft) || 0;
            if (marginLeft < 0) { // Ensure it doesn't exceed the leftmost limit
                slider1.style.marginLeft = (marginLeft + cardwidth1) + 'px'; // Move right
            }
        }
        
        
    
        
        function next() {
            let marginLeft = parseFloat(slider1.style.marginLeft) || 0;
            let maxMargin = -cardwidth1 * (cards1.length - elementsToshow1); // Calculate max scroll limit
            if (marginLeft > maxMargin) {
                slider1.style.marginLeft = (marginLeft - cardwidth1) + 'px'; // Move left
            }
        }
        
        let slidercontainer2=document.getElementById('slidercontainer2');
        let slider2=document.getElementById('slider2');
        let cards2=slider2.getElementsByTagName('li');
        
        let elementsToshow2=3;
        let slidercontainerwidth2 =slidercontainer2.clientWidth;
        let cardwidth2=slidercontainerwidth2/elementsToshow2;

        slider2.style.width=cards2.length*cardwidth2+'px';
        slider2.style.transition='margin';
        slider2.style.transitionDuration='1s';

        for(let index=0; index<cards2.length; index++){
            const element=cards2[index];
            element.style.width=cardwidth2+'px';
        }

    
        
        function previouscards() {
            let marginLeft = parseFloat(slider2.style.marginLeft) || 0;
            if (marginLeft < 0) { // Ensure it doesn't exceed the leftmost limit
                slider2.style.marginLeft = (marginLeft + cardwidth2) + 'px'; // Move right
            }
        }
        
        
    
        
        function nextcards() {
            let marginLeft = parseFloat(slider2.style.marginLeft) || 0;
            let maxMargin = -cardwidth2 * (cards2.length - elementsToshow1); // Calculate max scroll limit
            if (marginLeft > maxMargin) {
                slider2.style.marginLeft = (marginLeft - cardwidth2) + 'px'; // Move left
            }
        }