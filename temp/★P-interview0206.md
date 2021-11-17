```java
class Solution {
    public boolean isPalindrome(ListNode head) {
        //1. 边界情况
        if(head == null || head.next == null){
            return true;
        }

        //2. sb存储
        StringBuilder sb = new StringBuilder();
        while(head != null){
            sb.append(head.val);
            sb.append("|");
            head = head.next;
        }
        sb.deleteCharAt(sb.length()-1);
        int i1 = 0, i2 = sb.length()-1;
        while(i1 < i2){
            int len = 0;
            while(sb.charAt(i1+len) != '|'){
                len++;
            }
            String left = sb.substring(i1,i1+len);
            String right = sb.substring(i2-len+1,i2+1);
            if(!left.equals(right)){
                return false;
            }
            i1 = i1+len+1;
            i2 = i2-len-1;
        }
        return true;
    }
}
```

① 字符串存储：space ：O(1)







```java
class Solution {
    public boolean isPalindrome(ListNode head) {
    //1. 边界情况
        if(head == null || head.next == null){
            return true;
        }

        //2. 快慢指针找到链中间节点
        ListNode slow = head,fast = head;
        while(fast != null && fast.next != null && fast.next.next != null){
            slow = slow.next;
            fast = fast.next.next;
        }

        //3. 反转链表
        ListNode head2 = slow.next;
        ListNode before = null;
        ListNode next = head2.next;
        while(head2 != null){
            head2.next = before;
            before = head2;
            head2 = next;
            if(head2 != null){
                next = head2.next;
            }
        }
        //4. 判断before和head
        while(true){
            if(before.val != head.val){
                return false;
            }

            before = before.next;
            head = head.next;
            if(before == null){
                break;
            }
        }

        return true;
    }
}
```

① 快慢指针找到链表中间

② 反转后半部分链表

③ 判断两个链表是否数值相等

④ 注意输入链表长度为0、1、2、3、4这五种典型case下，运行情况是否符合预期





































































