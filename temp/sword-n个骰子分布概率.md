```java
      public static double[] dicesProbability(int n) {
          double[] origin = {1/6d,1/6d,1/6d,1/6d,1/6d,1/6d};
          for(int i=2; i <= n; i++){ // 循环的次数
              double[] target = new double[5*i+1];
              for(int j=0; j < origin.length; j++){ //对于每一个已有数值，
                  for(int k=0; k < 6; k++){ //加上1~6，会生成新的数值 -> /6 实际上是乘以新骰子的概率*1/6
                      target[j+k] += origin[j]/6;
                  }
              }
              origin = target;
          }

          return origin;
      }
```



1、本质上是一道数学题

2、TODO：尝试用自己的理解解题





































