0- idea {
** first we create the final type classes (types) that we want to create an instant of with empty properties **

** we create an interface has methods that present the proccess of building a new instant of a class type with the properties. **

** then we create for each type a builder class, this class implements the interface class and implements the functionality by its way. based on the type. **

** Note that: we have a getter method which get the final insatat in each builder class. **

** after the prossess thees instate will be Loaded with instial properties.**
}

4- create a test case {
create (n) of test methods for each (Builder) type and make sure that every method returns a spesific instance of a spesific class (Loaded with all the propriat properties) with (assertInstanceOf).
}

تستخدم هذة الطريقة عندما يكون لديك:
انواع مختلفة
لها نفس خطوات الانتاج
تختلف طريقة عمل هذة الخطوات على حسب النوع
فيتم عمل لكل نوع كلاس Builder ليقوم بعمل تلك الخطوات بطريقة هذا النوع ويحتوى على method لارجاع instant من هذا النوع بعد ان تم بناءة من البلدر
كل الكلاسات البلدر تشترك فى انترفيس واحد
يتم عمل كلاس ياخذ فى الكونستركتر نوع من انواع البلدر ويحتوى على ميثود واحدة يتم عمل اكسكيوت لكل الميثزد داخل هذا البلدر

مثال:
if you want to build new instances of car class you will be in need to doors a wheeles, glasses, etc.. properties for each type of cars,
so you will have methods like createDoors, createWheeles, and getNewCar.
