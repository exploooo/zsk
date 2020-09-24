function Osoba(_imie, _nazwisko, _numer){

    this.imie = _imie;
    this.nazwisko = _nazwisko;
    this.numer = _numer;

}

let o1 = new Osoba('Mateusz', 'Gejiński', 93968);
let o2 = new Osoba('Klaudiusz', 'Starb', 93969);
let o3 = new Osoba('Marcin', 'Karalus', 93970);

let tab = [];
tab.push(o1,o1,o1);
console.log(tab);

function fetch(_imie, _data){
    for(let i=0; i<_data.length; i++){
        if (_imie == _data[i].imie){
            console.log(_data[i]);
        }
    }
};

function add(_tab, _person){
    _person = new Osoba;
    _person.imie="Marcin";
    _person.nazwisko="Czaplicki";
    _person.number="93971";
    for(let i = 0; i<_tab.length; i++){
        if(_person == _tab[i]){
            console.log("taka osoba istnieje już w bazie");
        }
        else{
            _tab.push(_person);
            console.log(_tab);
        }
    }
};

//add(tab, o4);

add(tab, "Marcin");
