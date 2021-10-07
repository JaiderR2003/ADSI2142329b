class Persona{
    constructor(nombre, apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }

    get nombre(){
        return this._nombre;
    }

    set apellido(apellido){
        this._apellido=apellido;
    }

    get apellido(){
        return this._apellido;
    }

    nombreCompleto() {
        return this._nombre+' '+this._apellido;
    }
}

class Aprendiz extends Persona{
    constructor(nombre, apellido, programa, ficha){
        super(nombre, apellido);
        this._programa=programa;
        this._ficha=ficha;
    }

    set programa(programa){
        this._programa=programa;
    }

    get programa(){
        return this._programa;
    }

    set ficha(_ficha){
        this._ficha=ficha;
    }

    get ficha(){
        return this._ficha;
    }
}

var ap=new Aprendiz('Carlos','Roa', 'ADSO', '2142329');

console.log(ap);

obj=new Persona('Pepito','Perez');

obj.nombre='Roberto';

console.log(obj.nombre);

console.log(obj.nombreCompleto());