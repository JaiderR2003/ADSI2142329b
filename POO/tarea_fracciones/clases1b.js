class persona{
    constructor(nombre ,  apellido){ 
    this._nombre=nombre;
    this._apellido=apellido;
    }//cierre del constructor
    set nombre(nombre){
        this._nombre=nombre;
    }
    get nombre(){
        return this._nombre; //el guion bajo es para difeenciar el atributo
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
    get apellido(){
        return this._apellido; //el guion bajo es para difeenciar el atributo
    }
nombreCompleto(){
    return this._nombre+ ' '+this._apellido;
}


}//cierre de la clase persona

class Aprendiz extends persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);
        this._programa=programa;
        this._ficha=ficha;
    }
    set programa(programa){
        this._nombre=programa;
    }
    get programa(){
        return this._programa; //el guion bajo es para difeenciar el atributo
    }
    set ficha(ficha){
        this._ficha=ficha;
    }
    get ficha(){
        return this._ficha; //el guion bajo es para difeenciar el atributo
    }
}
var ap=new Aprendiz('laura','Gonzales', 'ADSI', '2142329');
console.log(ap);

obj=new persona('Julito', 'Tacañito');

//obj.nombre='Roberto';

console.log(obj.nombre);
console.log(obj.nombreCompleto());

