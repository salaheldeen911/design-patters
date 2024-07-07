0- idea {
create a class (abstractFactory) that has (n) of methods, everyone of them should
return an instant of spesific class which implements an interface.
}

1- create interface {
methods{
calculatePrice
}
}

2- create (n) of types {
classes{
BMWCar, (implements the interface)
BenzCar, (implements the interface)
}
}

3- create the DESIGN-PATTERN class {
methods{
createBMWCar(): BMWCar,
createBenzCar(): BenzCar
}
}

4- create a test case {
create (n) of test methods for each type and make sure that every method returns a spesific instance of a spesific class with (assertInstanceOf).
}

تستخدم هذه الطريقة عندما يكون لديك مجموعه من الانواع وتريد ان عندما تنشئ اوبجيكت جديد من احد هذة الانواع ان تستخدم كلاس واحد ووظيفة معينه لترجع لك اوبجيكت جديد من نوع معين

ولعمل اختبار تتاكد من هذا الكلاس عند استخدام منه وظيفة معينه ان ترجع هذه الوظيفة اوبجيكت جديد من نوع معين
