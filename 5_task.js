function printOrderTotal(responseString) {
   let responseJSON = JSON.parse(responseString);
   let orderTotal = 0;
   let orderTotalPrint;

   for(let index in responseJSON) {
      let item = responseJSON[index];

      if(item.price !== undefined) {
         orderTotal += item.price;
      }
   }

   if(orderTotal === 0) {
      orderTotalPrint = 'Бесплатно';
   } else {
      orderTotalPrint = `${orderTotal} руб.`;
   }

   console.log(`Стоимость заказа: ${orderTotalPrint}`);
}
