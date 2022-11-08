console.log("-------SCALAR------");
tf.scalar(3.14).print();

console.log("---------TESNOR 1 DIMENSI--------");
const tensor1d = tf.tensor1d([1,2,34])
console.log(tensor1d);

console.log("---------TESNOR 2 DIMENSI--------");
tf.tensor2d([[34, 21, 132], [43, 34, 123]]).print()

console.log("---------TESNOR 2 DIMENSI FLAT--------");
tf.tensor2d([1, 2, 3, 4,5], [5, 1]).print();

console.log("---------TESNOR 3 DIMENSI FLAT--------");
tf.tensor3d([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], [4,2 ,4]).print();