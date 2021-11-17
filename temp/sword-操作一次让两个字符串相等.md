```java
class Solution {
    public boolean oneEditAway(String first, String second) {
        //1. 特殊情况处理
        if(first == null && second == null){
            return true;
        } else if(first == null && second != null){
            return false;
        } else if(first != null && second == null){
            return false;
        }
        if(first.equals(second)){
            return true;
        }
        //2. 状态转移
        if(first.length() == second.length()){
            int count = 0;
            for(int i=0; i < first.length(); i++){
                if(first.charAt(i) != second.charAt(i)) count++;
            }
            return count <= 1;
        } else {
            String a = first.length()>second.length() ? first : second; //长字符串
            String b = first.length()>second.length() ? second : first; //短字符串
            if(a.length()-b.length() > 1){
                return false;
            }
            for(int i=0; i < a.length(); i++){
                String na = a.substring(0,i)+a.substring(i+1,a.length());
                if(na.equals(b)){
                    return true;
                }
            }
            return false;
        }
    }
}
```

```java
关于substring操作的处理，例如要获取删除单个元素的所有可能：
        String s = "abc";
        for(int i=0; i < s.length(); i++){
            //len=3, i=2 -> (0,2) + (3,3) -> (0,2)
            String ns = s.substring(0,i) + s.substring(i+1);
            System.out.println(ns);
        }
```











































