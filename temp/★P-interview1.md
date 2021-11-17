```java
public boolean isUnique(String astr) {
        Map<Character, Integer> map = new HashMap<>();
        for(int i=0; i < astr.length(); i++){
            char c = astr.charAt(i);
            if(map.containsKey(c)){
                return false;
            }
            map.put(c,1);
        }
        return true;
    }
```

① 常规算法：哈希表存储是否出现的数字











```java
class Solution {
    public boolean isUnique(String astr) {
        long high64 = 0;
        long low64 = 0;
        for(char c : astr.toCharArray()){
            if(c >= 64){
                long bitIndex = 1L << (64-c);
                if((high64 & bitIndex) != 0){
                    return false;
                }
                high64 |= bitIndex;
            } else{
                long bitIndex = 1L << c;
                if((low64 & bitIndex) != 0){
                    return false;
                }
                low64 |= bitIndex;
            }
        }
        return true;
    }
}
```

② 骚操作：利用Java中的两个long类型存储128位的ASCII码，这里使用位运算



















































