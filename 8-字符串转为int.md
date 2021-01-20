```java
class Solution {
    public int myAtoi(String s) {
        //1.判断是否是有效整数
        int begin = 0;
        while(begin < s.length() && s.charAt(begin) == ' '){
            begin++;
        }
        if(begin >= s.length() || !((s.charAt(begin) >= '0' && s.charAt(begin) <= '9')
                || s.charAt(begin) == '-' || s.charAt(begin) == '+')){
            return 0;
        }

        //2. 获取符号部分
        boolean isMinus = false;
        if(s.charAt(begin) == '-'){
            begin++;
            isMinus = true;
        } else if(s.charAt(begin) == '+'){
            begin++;
        }
        if(begin >= s.length()){
            return 0;
        }

        //3. 获取整数部分 ' -42 ' ' -42'
        //3.1 跳过前置零
        while(begin < s.length() && s.charAt(begin) == '0'){
            begin++;
        }

        int end = begin;
        while(end < s.length() && s.charAt(end) >= '0' && s.charAt(end) <= '9'){
            end++;
        }
        if(begin == end){
            return 0;
        }

        //3.2 转换前预判断
        if(end-begin >= 11){
            if(isMinus){
                return Integer.MIN_VALUE;
            } else {
                return Integer.MAX_VALUE;
            }
        }
        Long value = Long.valueOf(s.substring(begin,end));
        if(value > Integer.MAX_VALUE){
            if(isMinus){
                return Integer.MIN_VALUE;
            } else {
                return Integer.MAX_VALUE;
            }
        }

        //4. 正常返回
        if(isMinus){
            return -(value.intValue());
        } else {
            return value.intValue();
        }
    }
}
```



1、相对于传统的字符串转换为整数，加了很多限制条件

2、需要依靠尽可能多的test case来判断代码是否运行正确

3、边界case：

① 符号包含'+'和'-'

② 直接转换整形，可能会导致溢出

③ "" 不能直接调用Long.valueOf(s)方法

④ 需要跳过前置零

⑤ 需要防止数组越界

```java
System.out.println(myAtoi(""));
System.out.println(myAtoi(" "));
System.out.println(myAtoi("+1")); 
System.out.println(myAtoi("- "));
System.out.println(myAtoi("-4"));
System.out.println(myAtoi("42"));
System.out.println(myAtoi("   -42"));
System.out.println(myAtoi("4193 with words"));
System.out.println(myAtoi("words and 987"));
System.out.println(myAtoi("-91283472332"));
System.out.println(myAtoi("20000000000000000000"));
System.out.println(myAtoi("   0000000000012345678"));
```









































