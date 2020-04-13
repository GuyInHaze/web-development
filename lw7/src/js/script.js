 function isPrimeNumber(n) {
   let isPrime;

   if (typeof n == 'number') {
     for (let i = 2; i <= n; i++) {
       isPrime = true;
       for (let j = 2; j < i; j++) {
         if (i % j == 0) {
           isPrime = false;
           break;
         }
       }
     }
   if (isPrime) {
     console.log(n + ' is prime number');
   } else {
     console.log(n + ' is not prime number');
   }

   } else if (typeof n == 'object') {
     for (let k of n) {
       for (let i = 2; i <= k; i++) {
         isPrime = true;
         for (let j = 2; j < i; j++) {
           if (i % j == 0) {
             isPrime = false;
             break;
           }
         }
       }
       if (isPrime) {
         console.log(k + ' is prime number')
       } else {
         console.log(k + ' is not prime number')
       }
     }

   } else {
     console.log('incorrect input data');
   }
 }
