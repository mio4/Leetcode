```java
class Solution {
    public boolean isFlipedString(String s1, String s2) {
        if(s1.length() != s2.length()){
            return false;
        }
        if(s1.equals(s2)){
            return true;
        }

        String s3 = s2+s2;
        return s3.contains(s1);
    }
}
```

① 截断拼接字符串，判断是否存在一种可能性刚好匹配

② 骚操作：将两个s2拼接起来，如果包含s1，则说明是旋转字符串









































