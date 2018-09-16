var Event = new Vue();


Vue.component("tabs", {
    template: `
		<div class="tab">
			<ul>					
				<li v-for="tab in tabs" :class="{'active': tab.selectedNow}" @click="makeEvent(tab.name)">
				 	
				 	{{tab.name}} 
				 
				</li>
			</ul>	
			<div class="details">
				<slot></slot>
			</div>		
		</div>
	`,

    props: ["activeTab"],
    data: function(){
        return {
            tabs: []
        }
    },

    mounted: function(){
        this.tabs = this.$children;
        //console.log(this.tabs);
    },

    methods: {
        makeEvent: function(s){
            Event.$emit('tabchange', s);
        }
    }
});

Vue.component("tab", {
    template: `<div v-if="selectedNow">
					<slot></slot>
				</div>
				`,
    props: ['selected', "name"],
    data: function(){
        return {
            selectedNow: false
        }
    },
    created: function(){
        var currentVue = this;
        currentVue.selectedNow = currentVue.selected;

        Event.$on("tabchange", function(s){
            if(s == currentVue.name){
                currentVue.selectedNow = true;
            } else{
                currentVue.selectedNow = false;
            }
        });
    }
});