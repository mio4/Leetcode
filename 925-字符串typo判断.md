```java
class Solution {
    public boolean isLongPressedName(String name, String typed) {
        if(name.length() == 0 && typed.length() != 0){
            return false;
        } else if(name.length() != 0 && typed.length() == 0){
            return false;
        } else if(name.length() == 0 && typed.length() == 0){
            return true;
        }

        int index1 = 0, index2 = 0;
        char prev = '-';
        while(index1 < name.length()){
            if(index2 >= typed.length()){
                return false;
            }
            if(name.charAt(index1) == typed.charAt(index2)){
                prev = name.charAt(index1);
                index1++;
                index2++;
            } else {
                if(typed.charAt(index2) == prev){
                    index2++;
                } else {
                    return false;
                }
            }
        }
        //末尾判断是否有多余字符
        while(index2 < typed.length()){
            if(typed.charAt(index2) != prev){
                return false;
            }
            index2++;
        }
        return true;
    }
}
```

1、边界情况：字符串长度为0

2、其他情况：

① s1.length() > s2.length() 

② s1.length() < s2.length()

③ s1.length() = s2.length()

匹配时是否越界？typed是否存在多余字符

















































