let vue=new Vue({
    el:'.container',
    data:{
        information:'',
        experience:'',
        portfolio:'',
        skillS:'',
        skill:'',
        jbcon:'',
        edu:'',
        intr:'',
        img:'',
        informationShow:true,
        experienceShow:true,
        portfolioShow:true,
        skillSShow:true,
        skillShow:true,
        jbconShow:false,
        eduShow:true,
        intrShow:true,
        imgShow:false,
        t:'',
    },
    methods:{
        min:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.information').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollTop+133)==document.querySelector('.main').offsetHeight){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.information').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
        },
        mex:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.exp').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollTop+133)==document.querySelector('.main').offsetHeight){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.exp').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
        },
        msk:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.skills').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollTop+133)==document.querySelector('.main').offsetHeight){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.skills').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
        },
        med:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.education').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollTop+133)==document.querySelector('.main').offsetHeight){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.education').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
        },
        mpo:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.portfolio').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollTop+133)==document.querySelector('.main').offsetHeight){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.portfolio').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
        },
        mco:function(){
            this.informationShow=false;
            this.experienceShow=false;
            this.portfolioShow=false;
            this.skillSShow=false;
            this.jbconShow=true;
            this.eduShow=false;
            this.intrShow=false;
            this.imgShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
        },
        mim:function(){
            this.informationShow=false;
            this.experienceShow=false;
            this.portfolioShow=false;
            this.skillSShow=false;
            this.jbconShow=false;
            this.eduShow=false;
            this.intrShow=false;
            this.imgShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
        },
        mad:function(){
            window.location.href='backend/index.php';
        },
    },
    beforeCreate: function(){
        fetch('api/intro.php?aut=1',{method:'GET'}).then(res=>{
            return res.json()
        }).then(res=>{
            console.log(res);
            this.information=res.information;
            this.experience=res.experience;
            this.portfolio=res.portfolio;
            this.skillS=res.skillS;
            this.skill=res.skill;
            this.jbcon=res.jbcon;
            this.edu=res.edu;
            this.intr=res.intr;
        }).catch(error=>console.log(error));

        fetch('api/img.php?pic=1').then(res=>{
            return res.json();
        }).then(res=>{
            this.img=res;
        });
    },
});

