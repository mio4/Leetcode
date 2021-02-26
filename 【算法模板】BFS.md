### 基础模板

```java
while(!queue.isEmpty()){
    int size = queue.size();
    for(int i=0; i < size; i++){
      	E element = queue.pollFirst();
        ... //add到queue中
    }
}
```



### 统计step的模板

```java
int step = 0; //表示广度遍历的深度（走的步数）
while(!queue.isEmpty()){
    int size = queue.size();
    for(int i=0; i < size; i++){
      	E element = queue.pollFirst();
        ... //add到queue中
    }
    step++;
}
```



### Deque & ArrayDeque

| **第一个元素（头部）** | **最后一个元素（尾部）**                                     |                                                              |                                                              |                                                              |
| ---------------------- | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
|                        | *抛出异常*                                                   | *特殊值*                                                     | *抛出异常*                                                   | *特殊值*                                                     |
| **插入**               | [`addFirst(e)`](https://blog.csdn.net/top_code/article/details/8650729) | [`offerFirst(e)`](https://blog.csdn.net/top_code/article/details/8650729) | [`addLast(e)`](https://blog.csdn.net/top_code/article/details/8650729) | [`offerLast(e)`](https://blog.csdn.net/top_code/article/details/8650729) |
| **移除**               | [`removeFirst()`](https://blog.csdn.net/top_code/article/details/8650729) | [`pollFirst()`](https://blog.csdn.net/top_code/article/details/8650729) | [`removeLast()`](https://blog.csdn.net/top_code/article/details/8650729) | [`pollLast()`](https://blog.csdn.net/top_code/article/details/8650729) |
| **检查**               | [`getFirst()`](https://blog.csdn.net/top_code/article/details/8650729) | [`peekFirst()`](https://blog.csdn.net/top_code/article/details/8650729) | [`getLast()`](https://blog.csdn.net/top_code/article/details/8650729) | [`peekLast()`](https://blog.csdn.net/top_code/article/details/8650729) |

此接口扩展了 [`Queue`](https://blog.csdn.net/top_code/article/details/8650729) 接口。在将双端队列用作队列时，将得到 FIFO（先进先出）行为。将元素添加到双端队列的末尾，从双端队列的开头移除元素。从`Queue` 接口继承的方法完全等效于 `Deque` 方法，如下表所示：

| **`Queue` 方法**                                             | **等效 `Deque` 方法**                                        |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| [`add(e)`](https://blog.csdn.net/top_code/article/details/8650729) | [`addLast(e)`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`offer(e)`](https://blog.csdn.net/top_code/article/details/8650729) | [`offerLast(e)`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`remove()`](https://blog.csdn.net/top_code/article/details/8650729) | [`removeFirst()`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`poll()`](https://blog.csdn.net/top_code/article/details/8650729) | [`pollFirst()`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`element()`](https://blog.csdn.net/top_code/article/details/8650729) | [`getFirst()`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`peek()`](https://blog.csdn.net/top_code/article/details/8650729) | [`peekFirst()`](https://blog.csdn.net/top_code/article/details/8650729) |



双端队列也可用作 LIFO（后进先出）堆栈。应优先使用此接口而不是遗留 [`Stack`](https://blog.csdn.net/top_code/article/details/8650729) 类。在将双端队列用作堆栈时，元素被推入双端队列的开头并从双端队列开头弹出。堆栈方法完全等效于`Deque` 方法，如下表所示：

| **堆栈方法**                                                 | **等效 `Deque` 方法**                                        |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| [`push(e)`](https://blog.csdn.net/top_code/article/details/8650729) | [`addFirst(e)`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`pop()`](https://blog.csdn.net/top_code/article/details/8650729) | [`removeFirst()`](https://blog.csdn.net/top_code/article/details/8650729) |
| [`peek()`](https://blog.csdn.net/top_code/article/details/8650729) | [`peekFirst()`](https://blog.csdn.net/top_code/article/details/8650729) |



ArrayDeque作为双向队列需要关注的方法：

1、**将元素放入队列尾部：addLast()，不能用push()**

2、从队列头部取出一个元素：pollFirst（）







## 备注：优先队列 PriorityQueue

PriorityQueue和ArrayDeque用法需要特别区分

```
//需求背景
需要保持一个一直升序排列的动态数组，涉及插入和删除操作
```

```java
        Queue<Integer> queue = new PriorityQueue<>();
				//1. 有序插入操作
				queue.push(nums[i]);
				//2. 有序删除操作
				queue.poll();
				//3. 判空
				queue.isEmpty();
```

















































