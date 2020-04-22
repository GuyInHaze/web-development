 function isPrimeNumber(n) {
   let isPrime;

   if (typeof n == 'number') {
	 if(n != 0 && n != 1){
       for (let i = 2; i <= n; i++) {
         isPrime = true;
         for (let j = 2; j < i; j++) {
           if (i % j == 0) {
             isPrime = false;
             break;
           }
         }
       }
     } else {
	   isPrime = false;
	 }
   if (isPrime) {
     console.log(n + ' is prime number');
   } else {
     console.log(n + ' is not prime number');
   }

   } else if (typeof n == 'object') {
       for (let k of n) {
         if((typeof k == 'number') && k != 0 && k != 1) {
           for (let i = 2; i <= k; i++) {
             isPrime = true;
             for (let j = 2; j < i; j++) {
               if (i % j == 0) {
                 isPrime = false;
                 break;
             }
           }
         }
       }
       if (isPrime) {
         console.log(k + ' is prime number');
       } else {
         console.log(k + ' is not prime number');
       }
     }

   } else {
     console.log('incorrect input data');
   }
 }
