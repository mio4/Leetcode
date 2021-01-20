```java
class MinStack {
    Stack<Integer> stack;
    Stack<Integer> mins;

    /** initialize your data structure here. */
    public MinStack() {
        stack = new Stack<>();
        mins = new Stack<>();
    }

    public void push(int x) {
        stack.push(x);
        if(mins.isEmpty() || mins.peek() >= x){
            mins.push(x);
        }
    }

    public void pop() {
        if(stack.peek().equals(mins.peek())){
            mins.pop();
        }
        stack.pop();
    }

    public int top() {
        return stack.peek();
    }

    public int getMin() {
        return mins.peek();
    }
}
```



① 维护一个最小栈

② 判断Integer类型相等，不能直接使用`=`













































