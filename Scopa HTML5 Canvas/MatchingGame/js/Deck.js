/*
    Defines the Deck object.
    @author jwill
*/

function Deck(numDecks) {
    if ( !(this instanceof arguments.callee) ) {
        return new arguments.callee(arguments); 
    }
    var cards;
    var self = this;
    
    self.init = function() {        
        self.cards = new Array(40 * numDecks);
        self.initCards();
    }
    
    self.initCards = function() {
        // Initialize the cards 
        var ordinals = ['1','2','3','4','5','6', '7','8','horse','king'];
        var suits = ['Clubs', 'Swords', 'Coins','Cups'];
        
        // Populate card array
        for (var k = 0; k<numDecks; k++) {
            for (var j = 0; j < suits.length; j++) {
                for (var i = 0; i < ordinals.length; i++) {
                    self.cards[ (i + (j*10) + (k*40)) ] = new Card(ordinals[i],suits[j]); 
                }
            }
        }
        
        // Shuffle the decks
        self.shuffleDecks();
    }
    
    self.rand = function(max) {
            return Math.floor(Math.random()*max);
        }         
    
    self.shuffleDecks = function () {
        var swap = function(i,j) {
            var temp = self.cards[j];
            self.cards[j] = self.cards[i];
            self.cards[i] = temp;
        }
        
        for(var j = 0; j<numDecks; j++) {
            for(var i = (numDecks * 40); i>=0; i--) {
                var r = self.rand(i);
                swap(i,r);
            }
        }
    }
    
    self.dealCard = function() {
        if (self.cards.length > 0)
            return self.cards.pop();
        else {
            self.init();
            return self.cards.pop();
        }
    }
    
    self.dealCards = function(num) {
        var cards = new Array();
        for (var i = 0;  i<num ; i++) {
            cards.push(self.dealCard());
        }
        return cards;
    }
    
    self.init();
}