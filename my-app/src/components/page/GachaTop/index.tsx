import style from "./index.module.scss";
import Link from "next/link";

export default function GachaTop() {

  return (
    <div className={style.page}>
      ガチャを引く
      <br />
      <Link href="/1">ガチャ1</Link>
      <br />
      <Link href="/2">ガチャ2</Link>
    </div>
  );
}
