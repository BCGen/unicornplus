export default class Route {
  constructor() {
    this.httpMethods = ['get', 'post', 'patch', 'put', 'delete']
    this.httpMainMethods = ['get', 'post']
    this.urlActions = ['create', 'edit']
  }

  pathname() {
    return _.trimEnd(window.location.pathname, '/')
  }

  action() {
    if (['post', 'patch'].indexOf(this.method()) !== -1) {
      const list = this.pathname().split('/')
      list.pop()
      return list.join('/')
    }

    return this.pathname()
  }

  method() {
    switch (this.routeAction()) {
      case 'create':
        return 'post'
      case 'edit':
        return 'patch'
      default:
        return 'post'
    }
  }

  routeAction() {
    switch (this.pathLastString()) {
      case 'create':
        return 'create'
      case 'edit':
        return 'edit'
    }

    if (isNaN(this.pathLastString())) {
      return 'index'
    }
    return 'show'
  }

  pathLastString() {
    return this.pathname()
      .split('/')
      .pop()
  }

  analysis() {
    const pathname = this.pathname()
    const routeAction = this.routeAction()
    const action = this.action()
    const method = this.method()

    return {
      pathname,
      routeAction,
      action,
      method
    }
  }
}
