import { element } from "./html-util.js";

export class TodoItemView {
  /**
   * todoItemに対するTodoアイテムのHTML要素を作成して返す
   * @param {TodoItemModel} todoItem
   * @param {function({id: number, completed: boolean})} onUpdateTodo
   * チェックボックスの更新イベントリスナー
   * @param {function({id: number})} onDeleteTodo 削除ボタンクリックイベントリスナー
   * @returns {Element}
   */
  createElement(todoItem, { onUpdateTodo, onDeleteTodo}) {
    const todoItemElement = todoItem.completed 
            ? element`<li>
                <input type="checkbox" class="checkbox" checked>
                <s>${todoItem.title}</s>
                <button class="delete">x</button>
              </li>`
            : element`<li>
                <input type="checkbox" class="checkbox">
                ${todoItem.title}
                <button class="delete">x</button>
              </li>`;
    // チェックボックスがトグルしたときのイベントにリスナー関数を登録
    const inputCheckboxElement = todoItemElement.querySelector('.checkbox');
    inputCheckboxElement.addEventListener('change', () => {
      // 指定したTodoアイテムの完了状態を反転させる
      onUpdateTodo({
        id: todoItem.id,
        completed: !todoItem.completed
      });
    });
    // 削除ボタン(x)がクリックされたときにTodoListModelからアイテムを削除
    const deleteButtonElement = todoItemElement.querySelector('.delete');
    deleteButtonElement.addEventListener ('click', () => {
      onDeleteTodo({
        id: todoItem.id
      });
    });
    // 作成したTodoアイテムのHTML要素を返す
    return todoItemElement;
  }
}