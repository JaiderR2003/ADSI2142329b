function llenarVector(vector, tam){
    for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random()*100));
    }
    return vector;
}

let vec=new Array();

let x=5;

console.log(llenarVector(vec,x));

console.log(vec[0]);

console.log('la suma de los pares es..'+sumaPares(vec));

console.log('la suma de los impares es..'+sumaImpares(vec));

//hoisting

function sumaPares(vector){

    let suma=0;

    for (let i = 0; i < vector.length; i++) {

        if (vector[i] % 2 == 0) {
            suma += vec[i];
        }
    }
    return suma;
}


function sumaImpares(vector){

    let sumaI=0;

    for (let i = 0; i < vector.length; i++) {
        
        if (vector[i] % 2 !== 0) {
            sumaI += vec[i];
        }
    }
    return sumaI;
}

// function suma(vector, vectorP, vectorN, tam){
//     let sumaP=0;
//     let sumaN=0;
//     for (let i = 0; i <= tam; i++) {
//         vector.push(Math.round(Math.random()*10));
        
//         if (vector[i] % 2 == 0) {
//             sumaP += vector[i];
//             vectorP.push(sumaP);
//         } else if (vector[i] % 2 !== 0){
//             sumaN += vector[i];
//             vectorN.push(sumaN);
//         }
//     }
//     console.log(vectorP);
//     console.log(vectorN);
// }

// let vect=new Array();

// let vecPosi=new Array();

// let vecNega=new Array();

// let z=10;

// console.log(suma(vect, vecPosi, vecNega, z));


// var vec=new Array();

// console.log(vec.length);

// vec.push('texto')

// console.log(vec.length);

// vec.push(120);

// console.log(vec);

// vec.unshift('Inicio')

// console.log(vec);

// vec.pop();

// console.log(vec);

// vec.shift();

// console.log(vec);